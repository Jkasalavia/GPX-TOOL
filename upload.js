const dropArea = document.getElementById('drop-area');
const fileInput = document.getElementById('fileInput');
const fileList = document.getElementById('file-list');
const errorMessage = document.getElementById('error-message');

// Prevent default behavior for drag-and-drop events
dropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
});

// Handle file drop
dropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    errorMessage.textContent = '';  // Clear previous error messages
    const files = e.dataTransfer.files;

    for (const file of files) {
        if (file.name.endsWith('.gpx')) {
            const listItem = document.createElement('li');
            listItem.textContent = file.name;
            fileList.appendChild(listItem);
        } else {
            errorMessage.textContent = 'Only GPX files are allowed.';
        }
    }
});
