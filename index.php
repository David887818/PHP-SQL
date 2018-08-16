<?php
include 'create.php'
?>

<!DOCTYPE html>
<html>
<style>

    tr,th,td {
        border: solid 1px;
    }
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    .cancelbtn, .signupbtn {
        float: left;
        width: 50%
    }

    .container {
        padding: 16px;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        border: 1px solid #888;
        width: 80%;
    }


    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        color: #000;
        font-size: 40px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }


    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }


    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }
</style>
<body>

<h1>CREATE</h1>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Create</button>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content animate" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="container">
            <label><b>Product NAME</b></label>
            <input type="text" placeholder="Enter Product NAME" name="nam" required>

            <label><b>	Product price	</b></label>
            <input type="text" placeholder="Enter Product price" name="pric" required>

            <label><b>Product description	</b></label>
            <input type="text" placeholder="Enter Product description" name="descriptio" required>

            <label><b>Product category	</b></label>
            <input type="text" placeholder="Enter Product category" name="categor" required>

            <label><b>Product date		</b></label>
            <input type="date" placeholder="Enter Product date" name="dat" required>

            <label><b>Product quantity</b></label>
            <input type="text" placeholder="Enter Product quantity" name="quantit" required>
            <div class="clearfix">
                <button type="submit" name="submit" class="signupbtn">create</button>

            </div>
        </div>
    </form>
</div>

<script>
    var modal = document.getElementById('id01');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }



</script>

</body>
</html>
