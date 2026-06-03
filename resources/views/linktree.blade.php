<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Linktree Clone</title>
<style>

<script>
    function showme()
    {
        /* alert("Hallo Selamat Siang"); */
        console.log;("Ini baris 13 , sudah sampai disini");
        a = 18 + 10;
        console.log("Hasil penjumlahan : " + a);

        Swal.fire({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success"
    });

    }

    function changeText()
    {
        const element : document.getElementById("intro");
        element.innerHTML = "Sistem Informasi ITS";
    }
<script>

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #1f2a2d;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: white;
    }

    .container {
        width: 90%;
        max-width: 420px;
        text-align: center;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .background_tengah {
        background: rgba(20, 28, 30, 0.9);
        padding: 1.5rem 1rem;
        border-radius: 1.5rem;
        box-shadow: 0 1rem 2rem rgba(0,0,0,0.4);
    }

    .profile {
        margin-bottom: 1.5rem;
    }

    .tombol_atas {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .tombol_atas2 {
        width: 2.5rem;
        height: 2.5rem;
        background: #d9d9d9;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        font-weight: bold;
    }

    .logo {
        width: 5rem;
        height: 5rem;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto 1rem;
    }
    .logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .username {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .link {
        background: #e6e6e6;
        color: #333;
        padding: 1rem;
        border-radius: 0.8rem;
        margin: 0.7rem 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.95rem;
        transition: 0.2s;
    }

    .link:hover {
        background: #d4d4d4;
    }

    .titiktiga {
        font-size: 1.2rem;
        line-height: 1;
    }

    .footer {
        margin-top: 2rem;
        font-size: 0.7rem;
        opacity: 0.7;
    }

    .badge {
        margin-top: 1rem;
        background: #fff;
        color: #333;
        display: inline-block;
        padding: 0.4rem 0.8rem;
        border-radius: 1rem;
        font-size: 0.7rem;
    }

</style>
</head>
<body>

    <div class="container">

    <div class="background_tengah">

    <div class="tombol_atas">
    <div class="tombol_atas2">
        <img src="GambarLinktree/LogoLinktree.png" style="width:60%; height:60%;">
    </div>
    <div class="tombol_atas2">
        <img src="GambarLinktree/LogoShare.png" style="width:60%; height:60%;">
    </div>
    </div>

    <div class="profile">
        <div class="logo">
            <img src="GambarLinktree/gyukaku.jpg" alt="profile">
        </div>
        <div class="username">@gyukakuonlineorder</div>
    </div>

    <div class="link">
        <span>Delivery & Takeaway Menu JKT & TGR</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Delivery & Takeaway Menu BDG, SBY, & JGJ</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Gyu-Kaku Delivery Website</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Whatsapp Order - Citywalk Sudirman</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Whatsapp Order - Lippo Mall Kemang</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Whatsapp Order - Living World</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Whatsapp Order - Citarum Bandung</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Whatsapp Order - Galaxy Mall</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Whatsapp Order - TP 4</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Whatsapp Order - Pakuwon Mall</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="link">
        <span>Whatsapp Order - Grha Eklin Jogja</span>
        <span class="titiktiga">⋮</span>
    </div>

    <div class="footer">
        Cookie Preferences • Report • Privacy
    </div>

    <div class="badge">Join gyukakuonlineorder on Linktree</div>

</div>

</div>

</body>
</html>
