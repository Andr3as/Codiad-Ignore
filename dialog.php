<!--
    Copyright (c) Codiad & Andr3as, distributed
    as-is and without warranty under the MIT License. 
    See http://opensource.org/licenses/MIT for more information.
    This information must remain intact.
-->
<form>
    <?php
        if ($_GET['action'] == "ignore") {
    ?>
        <div class="ignore_choose">
            <label>Ignore</label>
            <select class="ignore_range">
                <option value="file" class="filePath">Ignore just this file/directory</option>
                <option value="name" class="fileGeneral">Ignore this file/directory in every project</option>
                <option value="type" class="fileType">Ignore every file with same extension</option>
            </select>
            <button onclick="codiad.Ignore.setIgnore(); return false;">Ignore</button>
            <button onclick="codiad.modal.unload(); return false;">Close</button>
            <script>
                codiad.Ignore.isDir();
            </script>
        </div>
    <?php
        } else if ($_GET['action'] == "log") {
    ?>
        <div class="ignore_display">
            <table id="ignore_list">
                <tr>
                    <td>Path/Name/Extension</td>
                    <td>Range</td>
                    <td></td>
                </tr>
            </table>
            <p>INFO: A single file has to given by its path, to ignore a file in every project give its name, and to ignore it generally give its extension without point.</p>
            <button onclick="codiad.Ignore.saveDialog(); return false;">Save and Close</button>
            <button onclick="codiad.Ignore.addRule(); return false;">Add new rule</button>
            <script>
                codiad.Ignore.loadDialog();
            </script>
        </div>
    <?php
        }
    ?>
</form>