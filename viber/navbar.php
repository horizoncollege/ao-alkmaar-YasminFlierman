<div class="navbar" id="navbar">
    <div id="logo_afb">
        <!-- Creating a link to the logo -->
        <a href="../index.php"><img src="https://cdn.discordapp.com/attachments/1077908220879839237/1087678010091638824/logo.jpg" alt="logo"></a>
    </div>
    <div id="nav_linkjes">
        <ul>
            <button class="dropbtn"><a id="home_link" href="../index.php?id=<?php echo $userID;?>">Home</a></button>
            <div class="dropdown">
                <button class="dropbtn"><a class="dropdownHead" href="../dames/damesPage.php?id=<?php echo $userID;?>">Dames</a></button>
                <div class="dropdown-content">
                    <a class="dropdownContent" href="../dames/damesPage.php?id=<?php echo $userID;?>">Dames Kleding</a>
                    <a class="dropdownContent" href="../dames/damesSchoenen.php?id=<?php echo $userID;?>">Dames Schoenen</a>
                    <a class="dropdownContent" href="../dames/damesAcco.php?id=<?php echo $userID;?>">Dames Accosiores</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="../heren/mannen_page.php?id=<?php echo $userID;?>">Heren</a></button>
                <div class="dropdown-content">
                    <a href="../heren/mannen_page.php?id=<?php echo $userID;?>">Heren Kleding</a>
                    <a href="../heren/herenschoenen.php?id=<?php echo $userID;?>">Heren Schoenen</a>
                    <a href="../heren/herenacco.php?id=<?php echo $userID;?>">Heren Assosiores</a>
                </div>
            </div>
        </ul>
    </div>
</div>