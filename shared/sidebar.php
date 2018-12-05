<aside>
    <h2 class="hidden">Sidebar</h2>
    <img src="<?= ROOT_URI ?>img/logo.png" id="logo" alt="food saviour logo" />
    <div>
        <label for="add-search" class="hidden">Add new item: </label>
        <input type="text" id="add-search" name="add-search" placeholder="Quick Entry" class="inputbox"/>
        <button id="add-btn" class="btn-grey"><i class="fas fa-plus"></i><span class="hidden">Add</span></button>
        <ul id="searchContainer">
        </ul>
        <script src="<?= ROOT_URI ?>js/sidebar.js"></script>
    </div>
    <nav>
        <h3 class="hidden">Navigation</h3>
        <ul>
          <li class="block"><a href="<?= ROOT_URI ?>index.php">My Food</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>food-saved.php">Food Saved</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>food-lost.php">Food Lost</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>grocery-store.php">Grocery Store</a></li>
        </ul>
    </nav>
    <section id="footer">
        <h2 class="hidden">Terms and Condition</h2>
        <p>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms &amp; Condition</a>
        </p>
        <p>© The Breakfast Club <?= date("Y"); ?></p>
    </section>
</aside>
