<?php
    include "header.php";
    include "slider.php";
    include "./class/hotel_class.php";
?>

<?php
    $hotel = new hotel;
    $show_hotel = $hotel ->show_hotel();
?>

<div class="admin-content-right">
    <div class="admin-content-right-category-list">
        <h1>Danh sách Khách sạn</h1>
            <table>
                <tr>
                    <th>Stt</th>
                    <th>ID</th>
                    <th>Tên Khách sạn</th>
                    <th>Loại phòng</th>
                    <th>Chỉnh sửa</th>
                </tr>
                <?php 
                    if($show_hotel){$i=0;
                        while($result = $show_hotel->fetch_assoc()) {$i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $result['hotel_id'] ?></td>
                    <td><?php echo $result['cartegory_name'] ?></td>
                    <td><?php echo $result['hotel_name'] ?></td>
                    <td><a href="./hoteledit.php?hotel_id=<?php echo $result['hotel_id'] ?>">Sửa</a>
                    <a href="./hoteldelete.php?hotel_id=<?php echo $result['hotel_id'] ?>"> Xoá</a></td>
                </tr>
                <?php
                    }
                }    
                ?>

            </table>
        </div>
    </div>
    </section>
</body>
</html>