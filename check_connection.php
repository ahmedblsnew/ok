<?php
// إعداد رأس الصفحة لتحديد نوع المحتوى
header('Content-Type: application/json');

// التأكد من الاتصال بخادم القاعدة البيانات أو أي خدمة أخرى
// يمكنك هنا استبدال هذا الكود بأي كود يقوم بالتحقق من الاتصال بالخادم الذي ترغب فيه
$connected = true; // قم بتغيير هذا إلى false في حالة فشل الاتصال

// إعداد الرد
$response = array('connected' => $connected);

// إرجاع الرد بتنسيق JSON
echo json_encode($response);
?>
