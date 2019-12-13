<h5 style="text-align:center; margin-top:20px">Add the image of cover!</h5>
<form action="./api/portfolioadd.php" method="post" enctype="multipart/form-data" style="width:60%; margin:auto">
    <table>
        <tr>
            <td>Portfolio:</td>
            <td><input type="file" name="file" id="file" style="width:350px"></td>
        </tr>
        <tr>
            <td>Link:</td>
            <td><input type="text" name="http" id="http" style="width:350px"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center; border-bottom:none">
                <input type="submit" value="add" style="width: 50px; padding:5px; border-radius:5px">
                <input type="reset" value="reset" style="width: 60px; padding:5px; border-radius:5px">
            </td>
        </tr>
    </table>
</form>