<?php
$lang = array();

$lang['user_blocked'] = "Anda saat ini terkunci oleh sistem.";
$lang['user_verify_failed'] = "Kode Captcha tidak benar.";

$lang['email_password_invalid'] = "Surel / kata sandi tidak valid.";
$lang['email_password_incorrect'] = "Surel / kata sandi salah.";
$lang['remember_me_invalid'] = "Ingatkan saya tidak valid.";

$lang['password_short'] = "Kata sandi terlalu pendek.";
$lang['password_weak'] = "Kata sandi terlalu lemah.";
$lang['password_nomatch'] = "Kata sandi tidak cocok.";
$lang['password_changed'] = "Kata sandi berhasil diubah.";
$lang['password_incorrect'] = "Kata sandi saat ini salah.";
$lang['password_notvalid'] = "Kata sandi tidak valid.";

$lang['newpassword_short'] = "Kata sandi baru terlalu pendek.";
$lang['newpassword_long'] = "Kata sandi baru terlalu panjang.";
$lang['newpassword_invalid'] = "Kata sandi baru harus mengandung setidaknya satu karakter huruf besar dan huruf kecil, dan setidaknya satu digit angka.";
$lang['newpassword_nomatch'] = "Kata sandi baru tidak cocok.";
$lang['newpassword_match'] = "Kata sandi baru sama dengan kata sandi lama.";

$lang['email_short'] = "Alamat surel terlalu pendek.";
$lang['email_long'] = "Alamat surel terlalu panjang.";
$lang['email_invalid'] = "Alamat surel tidak valid.";
$lang['email_incorrect'] = "Alamat surel salah.";
$lang['email_banned'] = "Alamat surel ini tidak diperbolehkan";
$lang['email_changed'] = "Alamat surel berhasil diubah.";

$lang['newemail_match'] = "Surel baru cocok dengan surel sebelumnya.";

$lang['account_inactive'] = "Akun belum diaktifkan.";
$lang['account_activated'] = "Akun sudah diaktifkan..";

$lang['logged_in'] = "Anda sekarang sudah masuk.";
$lang['logged_out'] = "Anda sekarang sudah keluar.";

$lang['system_error'] = "Telah terjadi kesalahan sistem. Silakan coba lagi.";

$lang['register_success'] = "Akun telah dibuat. Surel aktivasi dikirim ke alamat surel.";
$lang['register_success_emailmessage_suppressed'] = "Akun telah dibuat.";
$lang['email_taken'] = "Alamat surel sudah digunakan.";

$lang['resetkey_invalid'] = "Kunci reset tidak valid.";
$lang['resetkey_incorrect'] = "Kunci reset salah.";
$lang['resetkey_expired'] = "Reset kunci telah kedaluwarsa.";
$lang['password_reset'] = "Berhasil mengatur ulang kata sandi.";

$lang['activationkey_invalid'] = "Kunci Aktivasi tidak tepat.";
$lang['activationkey_incorrect'] = "Kunci Aktivasi tidak benar.";
$lang['activationkey_expired'] = "Kunci Aktivasi telah kadaluarsa.";

$lang['reset_requested'] = "Reset Password telah dikirim ke alamat email";
$lang['reset_requested_emailmessage_suppressed'] = "Permintaan reset Password telah dibuat.";
$lang['reset_exists'] = "Permintaan reset sudah ada.";

$lang['already_activated'] = "Akun sudah diaktifkan.";
$lang['activation_sent'] = "Email aktivasi telah dikirim.";
$lang['activation_exists'] = "Sebuah aktivasi email sudah dikirim.";

$lang['email_activation_subject'] = '%s - Aktivasi akun';
$lang['email_activation_body'] = 'Halo,<br/><br/> Agar bisa login dengan akun Anda, pastikan melakukan aktivasi dengan klik link berikut ini
: <strong><a href="%1$s/%2$s">%1$s/%2$s</a></strong><br/><br/> Anda harus menggunakan kunci aktivasi : <strong>%3$s</strong><br/><br/> Jika Anda tidak pernah melakukan pendaftaran pada %1$s berarti email ini kesalahan pengiriman, abaikan saja.';
$lang['email_activation_altbody'] = 'Halo, ' . "\n\n" . 'Agar bisa login dengan akun Anda, pastikan melakukan aktivasi dengan klik link berikut ini :' . "\n" . '%1$s/%2$s' . "\n\n" . 'Anda harus menggunakan kunci aktivasi: %3$s' . "\n\n" . 'Jika kamu tidak pernah melakukan pendaftaran pada %1$s berarti email ini kesalahan pengiriman, abaikan saja.';

$lang['email_reset_subject'] = '%s - Permintaan reset password';
$lang['email_reset_body'] = 'Halo,<br/><br/> Untuk melakukan reset password silahkan klik link ini: <br/><br/><strong><a href="%1$s/%2$s">%1$s/%2$s</a></strong><br/><br/>Anda harus menggunakan kunci aktivasi: <strong>%3$s</strong><br/><br/>
Jika Anda tidak melakukan permintaan reset password pada %1$s berarti email ini kesalahan pengiriman, abaikan saja.';
$lang['email_reset_altbody'] = 'Halo, ' . "\n\n" . 'Untuk melakukan reset password silahkan klik link ini :' . "\n" . '%1$s/%2$s' . "\n\n" . 'Anda harus menggunakan kunci aktivasi: %3$s' . "\n\n" . 'Jika Anda tidak melakukan permintaan reset password pada on %1$s berarti email ini kesalahan pengiriman, abaikan saja.';

$lang['account_deleted'] = "Akun sukses dihapus.";
$lang['function_disabled'] = "Fungsi ini tidak diaktifkan.";
$lang['account_not_found'] = "Tak ada akun dengan email tersebut.";

return $lang;
