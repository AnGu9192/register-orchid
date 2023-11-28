<form id = "upload-image" enctype = "multipart/form-data" method = "post"></form>
                                <input type = "file" name = "file1" id = "file1"><br>
                                <input type = "button" value = "Upload File" onclick = "uploadFile()">
                                <progress id = "progressBar" value = "0" max = "100" style = "width: 300px;"></progress>
                                <h3 id = "status"></h3>
                                <p id = "loaded_n_total"></p>