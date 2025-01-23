<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uitnodiging voor SnapPay en een nieuwe lening</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3E92CC;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Welkom bij SnapPay!</h1>
    <p>Beste toekomstige SnapPay gebruiker,</p>
    <p>Je bent uitgenodigd om deel te nemen aan een lening op SnapPay. Om deel te nemen, moet je eerst een account aanmaken.</p>

    <h2>Leningdetails:</h2>
    <ul>
        <li>Titel: <?php echo e($loan->title); ?></li>
        <li>Bedrag: €<?php echo e(number_format($loan->amount, 2, ',', '.')); ?></li>
        <li>Looptijd: <?php echo e($loan->period_count); ?> <?php echo e(Str::plural($loan->period, $loan->period_count)); ?></li>
    </ul>

    <p>Klik op de onderstaande knop om je account aan te maken en de lening te bekijken:</p>

    <p>
        <a href="<?php echo e($inviteUrl); ?>" class="button">Account aanmaken en lening bekijken</a>
    </p>

    <p>Deze link is 7 dagen geldig. Als je problemen ondervindt of vragen hebt, neem dan gerust contact met ons op.</p>

    <p>
        Met vriendelijke groet,<br>
        Het SnapPay Team
    </p>
</div>
</body>
</html>

<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/emails/loan-invite-new-user.blade.php ENDPATH**/ ?>