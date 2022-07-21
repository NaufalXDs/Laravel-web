<script src="https://kit.fontawesome.com/7702a3a340.js" crossorigin="anonymous"></script>
<h3 class="sidebar-icon">
    <div class="sidebar-icon-indent"> </div>
    <span class="sidebar-icon-text">Naufal</span>
</h3>

<ul class="sidebar-items">
    <li class="sidebar-item" <?php if ($title == 'About') {
        echo 'sidebar-active';
    } ?>>
        <a href="/">
            <i class="fa-solid fa-user-secret"></i>
            About
        </a>
    </li>
    <li class="sidebar-item" <?php if ($title == 'Work') {
        echo 'sidebar-active';
    } ?>>
        <a href="/work">
            <i class="fa-solid fa-folder-open"></i>
            Work
        </a>
    </li>
    <li class="sidebar-item" <?php if ($title == 'Service') {
        echo 'sidebar-active';
    } ?>>
        <a href="#" style="cursor: not-allowed;">
            <i class="fa-solid fa-list"></i>
            Service
        </a>
    </li>
    <li class="sidebar-item" <?php if ($title == 'Contact') {
        echo 'sidebar-active';
    } ?>>
        <a href="/contact">
            <i class="fa-solid fa-paper-plane"></i>
            Contact
        </a>
    </li>
</ul>

<ul class="sidebar-social-media">
    <li class="sidebar-social-item">
        <a href="https://www.instagram.com/naufal.banh_" id="social-instagram">
            <i class="fab fa-instagram"></i>
            Instagram
        </a>
    </li>
    <li class="sidebar-social-item">
        <a href="#" onclick="discord()" id="social-discord">
            <i class="fab fa-discord"></i>
            Discord
        </a>
    </li>
</ul>

<script>
    function discord() {
        alert("Contact me from Id ! NFLDXD#0011");
    }
</script>
