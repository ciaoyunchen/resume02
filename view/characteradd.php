<h5 style="text-align:center; margin-top:20px">Add your personal character!</h5>
<form action="./api/characteradd.php" method="post" enctype="multipart/form-data" style="width:60%; margin:auto">
    <table>
        <tr>
            <td>Tiltle:</td>
            <td><input type="text" name="title" id="title" style="width:200px"></td>
        </tr>
        <tr>
            <td>Text:</td>
            <td><textarea name="text" id="text" rows="10" style="width:300px"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center; border-bottom:none">
                <input type="submit" value="add" style="width: 50px; padding:5px; border-radius:5px">
                <input type="reset" value="reset" style="width: 50px; padding:5px; border-radius:5px">
            </td>
        </tr>
    </table>
</form>