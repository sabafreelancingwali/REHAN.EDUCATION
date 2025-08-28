<?php
// facilitators.php
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Facilitators — Rehan.Education</title>
<style>
  body{font-family:Inter,system-ui;background:#f5f7ff;color:#071033;margin:0}
  .wrap{max-width:1000px;margin:24px auto;padding:20px}
  header{display:flex;justify-content:space-between;align-items:center}
  .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:18px}
  .card{background:white;padding:16px;border-radius:12px;box-shadow:0 8px 24px rgba(8,15,40,0.06);text-align:center}
  .avatar{width:84px;height:84px;border-radius:999px;background:linear-gradient(135deg,#6C82FF,#276EF1);display:inline-flex;align-items:center;justify-content:center;color:white;font-weight:800;font-size:22px;margin-bottom:8px}
  @media (max-width:900px){.grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="wrap">
  <header>
    <div style="font-weight:800">Facilitators</div>
    <div><button onclick="navigate('contact.php')" style="padding:8px 12px;border-radius:8px;border:0;background:#eef5ff;cursor:pointer">Invite a session</button></div>
  </header>
 
  <div class="grid">
    <div class="card">
      <div class="avatar">RK</div>
      <div style="font-weight:700">Rehan Khan</div>
      <div style="color:#59606b;font-size:13px">Founder & Lead Educator</div>
      <p style="color:#59606b">Rehan specializes in digital education, AI, and course design.</p>
    </div>
 
    <div class="card">
      <div class="avatar">AM</div>
      <div style="font-weight:700">Ayesha Malik</div>
      <div style="color:#59606b;font-size:13px">AI & Product Instructor</div>
      <p style="color:#59606b">Focuses on applied AI tools and product thinking.</p>
    </div>
 
    <div class="card">
      <div class="avatar">SM</div>
      <div style="font-weight:700">Samir Mir</div>
      <div style="color:#59606b;font-size:13px">Content & Monetization Coach</div>
      <p style="color:#59606b">Teaches content creation and monetization strategies.</p>
    </div>
  </div>
</div>
 
<script>function navigate(path){window.location.href=path;}</script>
</body>
</html>
