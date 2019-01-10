<!--TopBar menu -->
<div class="grid x"> 
  <!--Menu Text Phonebook -->
  <div class="top-bar" id="responsive-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text" href="index.php">PhoneBook</li>
      </ul>
    </div>
    <!--Username Display -->
    <div class="top-bar-right">
      <ul class="menu">
        <li><?php  if (isset($_SESSION['username'])) : ?>
          <p style="color: black;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        </li>
        <!--Logout Button -->
        <li><a class="alert button hollow" type="button" href="index.php?logout='1'" style="color: black; border-radius:10px; ">logout</a>
          <?php endif ?>
        </li>
      </ul>
    </div>
  </div>
</div>