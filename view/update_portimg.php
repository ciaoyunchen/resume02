<h5 style="text-align:center; margin-top:20px">Change the image of portfolio!</h5>
<form action="./api/update_portimg.php" method="post" enctype="multipart/form-data" style="width:60%; margin:auto">
    <table>
        <tr>
            <td>Portfolio image:</td>
            <td><input type="file" name="file" id="file" style="width:200px"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center; border-bottom:none">
                <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                <input type="submit" value="update" style="width: 70px; padding:5px; border-radius:5px">
                <input type="reset" value="reset" style="width: 50px; padding:5px; border-radius:5px">
            </td>
        </tr>
    </table>
</form>