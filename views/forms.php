
<?php include __DIR__. '/partials/header.php';?>
    <main class="container">
        <?php if(isset($_GET['name']) && isset($_GET[age])); ?>
        <h1>hello <?= $_GET['name'] ?? 'Nameless'?>! You are <?=$_GET['age'] ?? 'Infinite' ?> </h1>
        <?php endif; ?>
       <form>
        <lable>
            Name: 
        <input name="name" type="text" placeholder="Name">
</lable>
<lable for="age">Age:</lable>
        <input name="age" id="age" type="number" placeholder="Age">
<input type="submit" value="Send">
<button>Send</button>
</form> 
    </main>
<?php include __DIR__. '/partials/footer.php';?>