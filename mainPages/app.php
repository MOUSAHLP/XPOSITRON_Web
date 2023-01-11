<style>
    .app-container {
        background-color: #eee;
        position: fixed;
        z-index: 5;
        bottom: -100px;
        width: 100%;
        height: 10%;
        display: flex;
        align-items: center;
        flex-direction: row-reverse;
        justify-content: center;
        border-top-right-radius: 40px;
        border-top-left-radius: 40px;
        transition-duration: 1s;
    }

    .click {
        display: flex;
        align-items: center;
        flex-direction: row-reverse;
        justify-content: center;
        height: 100%;
    }

    .logo {
        height: 80%;
    }

    .close {
        height: 70%;
        position: absolute;
        right: 20px;
        top: 10%;
        cursor: pointer;
    }

    .app-text {
        font-size: 30px;
        color: var(--bs-blue);
        margin: 0px 50px;
        font-weight: bold;
    }

    @media (max-width:661px) {
        .app-container {
            padding-right: 10%;
        }

        .close {
            height: 50%;
            right: 10px;
            top: 10%;
        }

        .app-text {
            font-size: 20px;
            margin: 0px 10px;
        }
    }

    @media (max-width:331px) {
        .app-text {
            font-size: 18px;
            margin: 0px 5px;
        }
    }
</style>
<div class="app-container">
    <img src="images/close.png" class="close" alt="close">
    <div class="click">
        <img src="images/positron2.png" class="logo" alt="logo">
        <div class="app-text">
            <p>
                حمل تطبيقنا على نظام الأندرويد
            </p>
        </div>
    </div>
</div>

<script>
    let app_container = document.querySelector(".app-container");
    console.log(app_container);
    window.onload = function() {
        app_container.style.bottom = 0 + "px";
    }
    let click = document.querySelector(".click");
    click.onclick = function() {
        window.location.href = "app_page.php";
    }

    let close = document.querySelector(".close");
    close.onclick = function() {
        app_container.style.bottom = -100 + "px";
    }
</script>