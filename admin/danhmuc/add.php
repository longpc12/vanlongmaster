<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI THỂ LOẠI PHIM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addtheloai" method="POST">
           
            <div class="row2 mb10">
                <label>Tên thể loại </label> <br>
                <input type="text" name="tentheloai" placeholder="nhập vào tên thể loại">
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listtheloai"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>