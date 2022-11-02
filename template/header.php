<header id="home">
        <nav>
            <div class="header-nav">
                <div class="header-border">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<form>
                        <input type="button" value="back" onclick="history.back()">
                       </form>';
                    };
                    ?>
                    <div class="nav-brand">
                        <h3> Ex-dec | Exclusive for December </h3>
                    </div>
                    <ul class="nav-lu">
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="article.php">Article</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>