<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>

  
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <img src="images/giveaway-icon.jpg" alt="صورة مسابقة" class="giveaway-image">
    <div class="col-md-5 p-lg-5 mx-auto ">
      <h1 class="display-4 fw-normal">🎉 اربح مع محمد 🎉</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="demo" class="countdown-display"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
    </div>

    <div class="conatiner">
      <h3>للدخول في السحب يرجى اتباع ما يلي: </h3>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">تابع البث المباشر على صفتحي على فيسبوك بالتاريخ المذكور أعلاه</li>
    <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
    <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث سنقوم بتسجيل أسمك وايميلك</li>
    <li class="list-group-item">بنهاية البث سيتم اختبار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
    <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
  </ul>
    </div>

  </div>
  
<div class="container">
<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء أدخال معلوماتك</h3>   

        <div class="mb-3">
        <label for="firstName" class="form-label">الاسم الأول</label>
        <input type="text" name="firstName" id="firstName" class="form-control" value="<?php  echo $firstName ?>">
        <div class="form-text error"><?php echo $errors['firstNameError']?></div>
    </div>
    
    <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الثاني</label>
        <input type="text" name="lastName" id="lastName" class="form-control" value="<?php  echo $lastName ?>">
        <div class="form-text error"><?php echo $errors['lastNameError']?></div>

    </div>
    
    <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
        <input type="text" name="email" id="email" class="form-control" value="<?php  echo $email ?>">
        <div class="form-text error"><?php echo $errors['emailError']?></div>

    </div>

      <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="consentCheck" required>
      <label class="form-check-label" for="consentCheck">
          أوافق على شروط التسجيل وسياسة الخصوصية.
      </label>
  </div>

  <br></br>
    <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
    </form>
    <br></br>

  <div class="social-media-links">
      <a href="Facebook_profile" target="_blank" class="social-link facebook">
          <img src="images\Facebook_icon.jpg" alt="Facebook" class="icon">Facebook
      </a>
      <a href="X_profile" target="_blank" class="social-link twitter">
          <img src="images\Twitter-X-App-Icon-PNG.jpg" alt="X" class="icon">X
      </a>
      <a href="Instagram_profile" target="_blank" class="social-link instagram">
          <img src="images\pngtree-instagram-icon-png-image_6315974.png" alt="Instagram" class="icon">Instagram
      </a>
  </div>

    </div>
  </div>

<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>


<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button style="display: none;" type="button" id ="winner" class="btn btn-primary">
    اختيار الرابح
    </button>
</div>
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body">
      <?php foreach ($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName'])?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php include_once './parts/footer.php'; ?>