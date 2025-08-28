<?php
// courses.php
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Courses — Rehan.Education</title>
<style>
  body{font-family:Inter,system-ui;background:#f4f7ff;color:#071033;margin:0}
  .wrap{max-width:1000px;margin:24px auto;padding:20px}
  header{display:flex;justify-content:space-between;align-items:center}
  .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:18px}
  .card{background:white;padding:16px;border-radius:12px;box-shadow:0 8px 24px rgba(8,15,40,0.06)}
  .pill{display:inline-block;padding:6px 10px;border-radius:999px;background:rgba(39,110,241,0.08);color:#276EF1;font-weight:700;margin-bottom:8px}
  @media (max-width:900px){.cards{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="wrap">
  <header>
    <div style="font-weight:800">Courses</div>
    <div>
      <button onclick="navigate('contact.php')" style="padding:8px 12px;border-radius:8px;border:0;background:linear-gradient(90deg,#276EF1,#6C82FF);color:white;cursor:pointer">Apply</button>
    </div>
  </header>
 
  <div class="cards">
    <div class="card">
      <div class="pill">Level: Beginner</div>
      <h3>AI Fundamentals & Prompting</h3>
      <p style="color:#59606b">Learn how to use AI assistants, craft prompts, and integrate AI into workflows.</p>
    </div>
    <div class="card">
      <div class="pill">Level: Intermediate</div>
      <h3>Content Creation & Digital Design</h3>
      <p style="color:#59606b">Design visuals, short videos, and content that converts.</p>
    </div>
    <div class="card">
      <div class="pill">Level: Advanced</div>
      <h3>Course Creation & Online Teaching</h3>
      <p style="color:#59606b">Build your micro-course, launch it, and teach online with confidence.</p>
    </div>
  </div>
</div>
 
<script>function navigate(path){window.location.href=path;}</script>
</body>
</html>
