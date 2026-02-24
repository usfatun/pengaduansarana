<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Data Pengaduan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* BODY */
body {
    margin: 0;
    background: linear-gradient(135deg, #ffffff, #ffe5e5);
    min-height: 100vh;
    padding: 30px;
}

/* CONTAINER */
.container {
    background: white;
    max-width: 1200px;
    margin: auto;
    padding: 30px 35px;
    border-radius: 18px;
    box-shadow: 0 15px 40px rgba(255,0,0,0.15);
    border-top: 6px solid #c1121f;
}

/* HEADER */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

h2 {
    color: #c1121f;
    font-weight: 700;
}

/* USER INFO */
.user-info {
    font-size: 14px;
    color: #555;
}

.user-info a {
    color: #c1121f;
    font-weight: 600;
    text-decoration: none;
}

.user-info a:hover {
    text-decoration: underline;
}

/* FILTER FORM */
form select, form button, form a {
    padding: 8px 14px;
    border-radius: 8px;
    font-size: 13px;
    border: 1px solid #ddd;
}

form select:focus {
    border-color: #c1121f;
    outline: none;
    box-shadow: 0 0 5px #c1121f;
}

form button {
    background: #c1121f;
    color: white;
    border: none;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

form button:hover {
    background: #9b0d17;
}

form a {
    background: #999;
    color: white;
    text-decoration: none;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(255,0,0,0.12);
}

th, td {
    padding: 12px;
    text-align: center;
    font-size: 14px;
}

th {
    background: #c1121f;
    color: white;
}

/* ROW EFFECT */
tr:nth-child(even) {
    background: #fff5f5;
}

tr:hover {
    background: #ffe0e0;
    transition: 0.3s;
}

/* IMAGE */
td img {
    width: 70px;
    border-radius: 10px;
    border: 2px solid #c1121f;
}

/* STATUS BADGE */
.badge {
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    color: white;
}

/* STATUS COLOR */
.status-menunggu { background: #ffb703; }
.status-diproses { background: #219ebc; }
.status-selesai  { background: #48d814; }
.status-ditolak  { background: #d00000; }

/* BUTTON DETAIL */
.aksi a {
    text-decoration: none;
    background: #c1121f;
    color: white;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: bold;
    transition: 0.3s;
}

.aksi a:hover {
    background: #9b0d17;
}

/* PAGINATION */
.pagination {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.pagination .page-link {
    padding: 6px 12px;
    border-radius: 6px;
    margin: 2px;
    background: #fff;
    border: 1px solid #c1121f;
    color: #c1121f;
}

.pagination .active .page-link {
    background: #c1121f;
    color: white;
}
.btn-cetak {
    background: linear-gradient(135deg, #c1121f, #ff4d4d);
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 8px;
    font-size: 13px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    box-shadow: 0 5px 12px rgba(255,0,0,0.2);
}

.btn-cetak:hover {
    background: #9b0d17;
    transform: scale(1.05);
}

/* HEADER RIGHT AREA */
.header-right {
    display: flex;
    align-items: center;
    gap: 15px;
}

</style>
</head>

<body>

<div class="container">

<div class="header">