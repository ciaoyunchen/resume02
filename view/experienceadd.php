<h5 style="text-align:center; margin-top:20px">Add your work experience!</h5>
<form action="./api/experienceadd.php" method="post" enctype="multipart/form-data" style="width:60%; margin:auto">
    <table>
        <tr>
            <td>Company:</td>
            <td><input type="text" name="company" id="company" style="width:200px"></td>
        </tr>
        <tr>
            <td>Tiltle:</td>
            <td><input type="text" name="title" id="title" style="width:200px"></td>
        </tr>
        <tr>
            <td>Since:</td>
            <td><input type="text" name="time" id="time" style="width:200px"></td>
        </tr>
        <tr>
            <td>Tenure:</td>
            <td><input type="text" name="period" id="period" style="width:200px"></td>
        </tr>
        <tr>
            <td>Pay:</td>
            <td><input type="text" name="pay" id="pay" style="width:200px"></td>
        </tr>
        <tr>
            <td>Image:</td>
            <td><input type="text" name="file" id="file" style="width:200px"></td>
        </tr>
        <tr>
            <td>Content:</td>
            <td><input type="text" name="content" id="content" style="width:200px"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center; border-bottom:none">
                <input type="submit" value="add" style="width: 50px; padding:5px; border-radius:5px">
                <input type="reset" value="reset" style="width: 50px; padding:5px; border-radius:5px">
            </td>
        </tr>
    </table>
</form>