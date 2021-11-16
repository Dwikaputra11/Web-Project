<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        session_start();
        $hostname = "localhost";
        $user = "root";
        $pass = "";
        $database = "prakweb_daily_list";
        $conn = mysqli_connect($hostname,$user,$pass,$database);
        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            $checkEmail = "SELECT * FROM user_account WHERE email ='$email'";
            $result = mysqli_query($conn,$checkEmail);  

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password,$row["password"])){
                    $username = $row["username"];
                    $user_id = $row["id"];
                    $_SESSION['id'] = $user_id;
                    $_SESSION['login'] = true;
                    $_SESSION['username'] = $username;
                    header("Location: dashboard.php");
                    exit;
                }
            }
            
            $error = true;

            if($error) {
                echo "
                    <script>
                        alert('wrong password and username');
                    </script>
                ";
            }
        }
    ?>
    <div class="image">
        <svg width="745" height="595" viewBox="0 0 745 595" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M332.037 490.91C366.892 490.91 395.147 484.664 395.147 476.96C395.147 469.256 366.892 463.01 332.037 463.01C297.183 463.01 268.927 469.256 268.927 476.96C268.927 484.664 297.183 490.91 332.037 490.91Z" fill="black"/>
            <path d="M332.037 476.96L296.587 587.91" stroke="black" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M332.038 476.96L367.488 587.91" stroke="black" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M308.228 551.48L347.748 526.14" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M316.167 526.14L355.697 551.48" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M394.148 356.86C393.988 361.78 394.058 379.01 393.248 386.38" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M191.118 138.96C191.118 135.464 188.283 132.63 184.788 132.63C181.292 132.63 178.458 135.464 178.458 138.96V160.81C178.458 164.306 181.292 167.14 184.788 167.14C188.283 167.14 191.118 164.306 191.118 160.81V138.96Z" fill="black"/>
            <path d="M184.787 203.87C191.801 203.87 197.487 198.184 197.487 191.17C197.487 184.156 191.801 178.47 184.787 178.47C177.773 178.47 172.087 184.156 172.087 191.17C172.087 198.184 177.773 203.87 184.787 203.87Z" fill="#FBDC8E"/>
            <path d="M609.368 342H615.368C615.998 341.997 616.602 341.746 617.048 341.3C617.493 340.854 617.745 340.25 617.748 339.62V302.74C617.748 302.428 617.687 302.118 617.567 301.83C617.447 301.541 617.27 301.279 617.048 301.06L609.468 293.48C609.247 293.258 608.986 293.082 608.697 292.962C608.409 292.842 608.1 292.78 607.788 292.78H585.398C584.767 292.783 584.163 293.034 583.718 293.48C583.272 293.926 583.02 294.53 583.018 295.16V298.72" fill="#FBDC8E"/>
            <path d="M88.0574 430C107.057 433.6 103.667 547 67.1974 540.14C32.7574 533.6 64.8773 425.59 88.0574 430Z" fill="black"/>
            <path d="M4.63747 444C19.7575 435.44 83.0475 515.08 54.0975 531.46C26.7475 547 -13.7725 454.44 4.63747 444Z" fill="#FBDC8E"/>
            <path d="M81.6875 594.92H43.5075C41.9697 594.92 40.486 594.352 39.3403 593.326C38.1946 592.301 37.4673 590.888 37.2975 589.36L32.4775 546.08C32.373 545.202 32.4556 544.312 32.7199 543.469C32.9841 542.625 33.4241 541.847 34.0108 541.186C34.5974 540.524 35.3175 539.995 36.1236 539.632C36.9297 539.269 37.8035 539.081 38.6875 539.08H86.3075C87.1844 539.081 88.0514 539.266 88.8522 539.623C89.6529 539.981 90.3694 540.503 90.9551 541.156C91.5408 541.808 91.9826 542.577 92.2518 543.412C92.521 544.246 92.6115 545.128 92.5175 546L87.9075 589.28C87.7538 590.824 87.0325 592.255 85.8833 593.297C84.734 594.34 83.2388 594.918 81.6875 594.92Z" fill="#969696"/>
            <path d="M98.7873 385.84C113.257 390.04 102.167 477.57 74.4573 469.51C48.2973 461.91 81.1773 380.72 98.7873 385.84Z" fill="#AB8DE5"/>
            <path d="M122.647 455.48C132.647 464.1 91.9674 530.04 72.7474 513.48C54.5974 497.91 110.437 445 122.647 455.48Z" fill="#FBDC8E"/>
            <path d="M62.6974 394.94C84.3574 394.94 104.187 533.24 62.6974 533.24C23.5174 533.24 36.3274 394.94 62.6974 394.94Z" fill="#78E5E1"/>
            <path d="M100.708 529.72H24.5075C22.2708 529.72 20.4575 531.533 20.4575 533.77V541.15C20.4575 543.387 22.2708 545.2 24.5075 545.2H100.708C102.944 545.2 104.758 543.387 104.758 541.15V533.77C104.758 531.533 102.944 529.72 100.708 529.72Z" fill="#D8D8D8"/>
            <path d="M599.287 298.72H577.287C576.935 298.72 576.585 298.79 576.26 298.925C575.934 299.06 575.638 299.259 575.389 299.508C575.14 299.758 574.943 300.055 574.809 300.381C574.674 300.708 574.606 301.057 574.607 301.41V345.21C574.607 345.922 574.889 346.604 575.392 347.109C575.894 347.613 576.576 347.897 577.287 347.9H606.677C607.389 347.897 608.071 347.613 608.573 347.109C609.075 346.604 609.357 345.922 609.357 345.21V308.81C609.359 308.458 609.291 308.108 609.157 307.782C609.023 307.456 608.826 307.16 608.577 306.91L601.177 299.51C600.677 299.007 599.997 298.723 599.287 298.72V298.72Z" fill="#D8D8D8"/>
            <path d="M609.367 307.76H601.897C601.5 307.76 601.118 307.602 600.837 307.321C600.555 307.039 600.397 306.658 600.397 306.26V298.72" fill="#969696"/>
            <path d="M617.777 301.83H610.307C609.908 301.827 609.525 301.667 609.243 301.385C608.96 301.102 608.8 300.72 608.797 300.32V292.78" fill="#64CCC4"/>
            <path d="M574.637 248.65H523.077C521.404 248.65 520.047 250.006 520.047 251.68V268.52C520.047 270.193 521.404 271.55 523.077 271.55H574.637C576.311 271.55 577.667 270.193 577.667 268.52V251.68C577.667 250.006 576.311 248.65 574.637 248.65Z" fill="#78E5E1"/>
            <path d="M548.847 287.25L555.787 266.23H541.907L548.847 287.25Z" fill="#78E5E1"/>
            <path d="M535.097 254.75L529.277 264.82H540.907L535.097 254.75Z" fill="white"/>
            <path d="M562.608 264.82L568.428 254.75H556.788L562.608 264.82Z" fill="white"/>
            <path d="M548.848 264.16C551.261 264.16 553.218 262.203 553.218 259.79C553.218 257.376 551.261 255.42 548.848 255.42C546.434 255.42 544.478 257.376 544.478 259.79C544.478 262.203 546.434 264.16 548.848 264.16Z" fill="white"/>
            <path d="M544.358 200.12H510.518C509.054 200.12 507.868 201.307 507.868 202.77V223.23C507.868 224.694 509.054 225.88 510.518 225.88H544.358C545.821 225.88 547.008 224.694 547.008 223.23V202.77C547.008 201.307 545.821 200.12 544.358 200.12Z" fill="#D8D8D8"/>
            <path d="M509.098 200.93L527.438 213" stroke="#969696" stroke-width="0.82" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M547.008 200.12L527.438 213" stroke="#969696" stroke-width="0.82" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M547.007 205.72C550.1 205.72 552.607 203.213 552.607 200.12C552.607 197.027 550.1 194.52 547.007 194.52C543.914 194.52 541.407 197.027 541.407 200.12C541.407 203.213 543.914 205.72 547.007 205.72Z" fill="#FBDC8E"/>
            <path d="M547.986 201.98H547.323V197.585L545.994 198.073V197.475L547.883 196.765H547.986V201.98Z" fill="white"/>
            <path d="M743.427 215.83H597.427C596.748 215.83 596.197 216.381 596.197 217.06V217.82C596.197 218.499 596.748 219.05 597.427 219.05H743.427C744.107 219.05 744.657 218.499 744.657 217.82V217.06C744.657 216.381 744.107 215.83 743.427 215.83Z" fill="#D8D8D8"/>
            <path d="M659.097 151.89H650.227C648.814 151.89 647.667 153.036 647.667 154.45V213.27C647.667 214.684 648.814 215.83 650.227 215.83H659.097C660.511 215.83 661.657 214.684 661.657 213.27V154.45C661.657 153.036 660.511 151.89 659.097 151.89Z" fill="#969696"/>
            <path d="M666.527 166.88H663.787C662.611 166.88 661.657 167.834 661.657 169.01V213.7C661.657 214.876 662.611 215.83 663.787 215.83H666.527C667.704 215.83 668.657 214.876 668.657 213.7V169.01C668.657 167.834 667.704 166.88 666.527 166.88Z" fill="#D8D8D8"/>
            <path d="M673.597 166.88H670.717C669.58 166.88 668.657 167.802 668.657 168.94V213.77C668.657 214.908 669.58 215.83 670.717 215.83H673.597C674.735 215.83 675.657 214.908 675.657 213.77V168.94C675.657 167.802 674.735 166.88 673.597 166.88Z" fill="#969696"/>
            <path d="M678.673 170.383L676.31 171.468C675.206 171.975 674.722 173.281 675.229 174.385L693.817 214.872C694.324 215.977 695.63 216.461 696.734 215.954L699.097 214.869C700.201 214.362 700.685 213.056 700.178 211.952L681.591 171.465C681.084 170.36 679.777 169.876 678.673 170.383Z" fill="#D8D8D8"/>
            <path d="M654.658 199.65C656.817 199.65 658.568 197.9 658.568 195.74C658.568 193.581 656.817 191.83 654.658 191.83C652.498 191.83 650.748 193.581 650.748 195.74C650.748 197.9 652.498 199.65 654.658 199.65Z" fill="#D8D8D8"/>
            <path d="M658.198 201.99H651.118C650.599 201.99 650.178 202.411 650.178 202.93C650.178 203.449 650.599 203.87 651.118 203.87H658.198C658.717 203.87 659.138 203.449 659.138 202.93C659.138 202.411 658.717 201.99 658.198 201.99Z" fill="#D8D8D8"/>
            <path d="M658.198 206.8H651.118C650.599 206.8 650.178 207.221 650.178 207.74C650.178 208.259 650.599 208.68 651.118 208.68H658.198C658.717 208.68 659.138 208.259 659.138 207.74C659.138 207.221 658.717 206.8 658.198 206.8Z" fill="#D8D8D8"/>
            <path d="M586.558 303.24H579.478C578.958 303.24 578.538 303.661 578.538 304.18C578.538 304.699 578.958 305.12 579.478 305.12H586.558C587.077 305.12 587.498 304.699 587.498 304.18C587.498 303.661 587.077 303.24 586.558 303.24Z" fill="#969696"/>
            <path d="M586.558 307.76H579.478C578.958 307.76 578.538 308.181 578.538 308.7C578.538 309.219 578.958 309.64 579.478 309.64H586.558C587.077 309.64 587.498 309.219 587.498 308.7C587.498 308.181 587.077 307.76 586.558 307.76Z" fill="#969696"/>
            <path d="M604.917 315.49H579.067C578.548 315.49 578.127 315.911 578.127 316.43C578.127 316.949 578.548 317.37 579.067 317.37H604.917C605.437 317.37 605.857 316.949 605.857 316.43C605.857 315.911 605.437 315.49 604.917 315.49Z" fill="#969696"/>
            <path d="M604.917 319.93H579.067C578.548 319.93 578.127 320.351 578.127 320.87C578.127 321.389 578.548 321.81 579.067 321.81H604.917C605.437 321.81 605.857 321.389 605.857 320.87C605.857 320.351 605.437 319.93 604.917 319.93Z" fill="#969696"/>
            <path d="M604.917 324.37H579.067C578.548 324.37 578.127 324.791 578.127 325.31C578.127 325.829 578.548 326.25 579.067 326.25H604.917C605.437 326.25 605.857 325.829 605.857 325.31C605.857 324.791 605.437 324.37 604.917 324.37Z" fill="#969696"/>
            <path d="M665.888 174.27C665.888 173.867 665.561 173.54 665.158 173.54C664.755 173.54 664.428 173.867 664.428 174.27V208.43C664.428 208.833 664.755 209.16 665.158 209.16C665.561 209.16 665.888 208.833 665.888 208.43V174.27Z" fill="#969696"/>
            <path d="M635.178 217.44H628.918C627.543 217.44 626.428 218.555 626.428 219.93C626.428 221.305 627.543 222.42 628.918 222.42H635.178C636.553 222.42 637.668 221.305 637.668 219.93C637.668 218.555 636.553 217.44 635.178 217.44Z" fill="#D8D8D8"/>
            <path d="M711.938 217.44H705.677C704.302 217.44 703.188 218.555 703.188 219.93C703.188 221.305 704.302 222.42 705.677 222.42H711.938C713.313 222.42 714.427 221.305 714.427 219.93C714.427 218.555 713.313 217.44 711.938 217.44Z" fill="#D8D8D8"/>
            <path d="M475.648 222.31H439.138C432.51 222.31 427.138 227.683 427.138 234.31V252.12C427.138 258.747 432.51 264.12 439.138 264.12H475.648C482.275 264.12 487.648 258.747 487.648 252.12V234.31C487.648 227.683 482.275 222.31 475.648 222.31Z" fill="#D8D8D8"/>
            <path d="M448.757 229.04H439.657V257.39H448.757V229.04Z" fill="#AB8DE5"/>
            <path d="M461.948 247.9H452.848V257.4H461.948V247.9Z" fill="#AB8DE5"/>
            <path d="M475.127 239.9H466.027V257.39H475.127V239.9Z" fill="#AB8DE5"/>
            <path d="M184.787 152.88C179.758 152.879 174.778 153.868 170.131 155.792C165.485 157.715 161.262 160.536 157.706 164.091C154.149 167.647 151.328 171.868 149.403 176.515C147.478 181.161 146.487 186.141 146.487 191.17H223.087C223.087 186.141 222.097 181.161 220.172 176.515C218.247 171.868 215.425 167.647 211.869 164.091C208.312 160.536 204.09 157.715 199.443 155.792C194.797 153.868 189.816 152.879 184.787 152.88V152.88Z" fill="#AB8DE5"/>
            <path d="M184.788 139.92V1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M485.188 574.68C485.188 577.05 483.798 592 486.568 593.38C489.338 594.76 519.788 595.6 521.168 594.21C522.548 592.82 523.378 589.92 522.168 589.09C520.958 588.26 509.168 585.91 507.568 584.8C505.968 583.69 503.758 577.8 504.568 574.68" fill="#1F161E"/>
            <path d="M394.147 379.25L411.287 373.1C410.547 341.83 403.237 271.96 392.857 261.57C390.417 259.14 342.157 254.9 333.547 254.9C282.167 254.9 266.927 260.76 263.057 264.64C251.057 276.64 247.317 332.24 247.317 351.71C247.317 371.18 302.317 381.28 302.317 381.28L366.787 385.71C366.787 385.71 380.927 387.17 393.157 387.89C393.427 384.14 394.147 379.25 394.147 379.25Z" fill="#78E5E1"/>
            <path d="M445.217 397.38C449.907 395.99 496.547 388.38 506.707 398.38C516.867 408.38 548.847 551.75 548.847 555.05H523.097L488.337 480.24" fill="#1F161E"/>
            <path d="M275.408 384.63C274.238 390.48 267.208 396.76 267.208 428.63C267.208 472.7 303.308 473.63 316.268 473.63C356.648 473.63 421.978 461.63 426.388 459.43C429.318 464.33 483.248 574.43 483.498 576.89H508.328C508.328 576.89 492.938 412.17 465.168 393.49C456.148 387.49 296.118 381.07 275.408 384.63Z" fill="#55B79D"/>
            <path d="M420.807 352.41C414.287 352.41 408.907 353.96 394.147 356.86L393.377 385.1C407.377 379.46 410.627 371.62 414.687 371.62C424.827 371.62 430.127 376.85 436.117 376.85C440.297 376.85 447.817 373.57 447.817 369.11C447.817 359.77 428.887 352.41 420.807 352.41Z" fill="#F8CDBA"/>
            <path d="M524.558 553.07C524.558 555.45 523.168 570.39 525.938 571.78C528.708 573.17 559.158 573.99 560.538 572.61C561.918 571.23 562.748 568.32 561.538 567.49C560.328 566.66 548.538 564.3 546.938 563.19C545.338 562.08 543.128 556.19 543.938 553.07" fill="#1F161E"/>
            <path d="M342.638 261.55C342.638 265.32 320.748 265.43 320.748 261.55V230.89H342.638V261.55Z" fill="#F8CDBA"/>
            <path d="M335.508 241C333.508 241 320.748 246.64 320.748 249.79V233.15C323.928 233.15 335.508 241 335.508 241Z" fill="#1F161E"/>
            <path d="M339.737 242.3C354.373 242.3 366.237 230.436 366.237 215.8C366.237 201.165 354.373 189.3 339.737 189.3C325.102 189.3 313.237 201.165 313.237 215.8C313.237 230.436 325.102 242.3 339.737 242.3Z" fill="#F8CDBA"/>
            <path d="M367.088 195C363.808 200.21 356.948 202.6 349.518 202.6C343.188 202.6 333.968 200.76 327.408 204.5C323.858 206.5 319.788 211.05 318.968 220.16C318.968 221.72 317.198 227.77 317.198 229.72C317.198 231.05 315.698 231.92 313.198 231.92C311.908 231.92 309.358 229.83 309.358 226.64C309.358 222.95 310.828 221.64 310.828 218.51C310.828 215.38 306.998 212.37 306.998 203.67C306.998 191.14 314.998 183.42 320.658 183.42C325.818 183.42 327.438 184.62 328.088 185.13C328.088 173.74 343.088 168.54 349.038 168.54C355.838 168.54 359.038 171.33 359.038 174.88C359.038 180.54 356.338 185.35 354.968 186.43C358.069 183.64 362.096 182.104 366.268 182.12C374.058 182.12 376.678 187.24 376.678 190.74C376.678 198.35 367.548 205.4 364.148 205.4C363.292 203.59 362.289 201.854 361.148 200.21" fill="#1F161E"/>
            <path d="M319.788 224.95C322.908 224.95 325.438 222.42 325.438 219.3C325.438 216.18 322.908 213.65 319.788 213.65C316.667 213.65 314.138 216.18 314.138 219.3C314.138 222.42 316.667 224.95 319.788 224.95Z" fill="#F8CDBA"/>
            <path d="M366.498 220.66C368.917 220.66 370.878 219.639 370.878 218.38C370.878 217.121 368.917 216.1 366.498 216.1C364.079 216.1 362.118 217.121 362.118 218.38C362.118 219.639 364.079 220.66 366.498 220.66Z" fill="#FA9E9F"/>
            <path d="M338.947 220.66C341.366 220.66 343.327 219.639 343.327 218.38C343.327 217.121 341.366 216.1 338.947 216.1C336.528 216.1 334.567 217.121 334.567 218.38C334.567 219.639 336.528 220.66 338.947 220.66Z" fill="#FA9E9F"/>
            <path d="M355.797 213.65C356.617 214.82 360.797 219.73 356.387 221.72" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M347.558 227.45C346.238 227.45 344.208 225.81 343.138 224.34" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M382.498 298.62C384.498 302.87 394.148 343.87 394.148 356.86" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M247.317 348.41C247.317 394.5 247.747 407.87 266.247 407.87C308.887 407.87 373.347 372.87 384.837 372.87C394.987 372.87 400.287 378.11 406.277 378.11C410.447 378.11 417.967 374.82 417.967 370.37C417.967 361.02 399.037 353.66 390.967 353.66C372.797 353.66 300.287 371.18 298.517 371.18C296.747 371.18 293.767 370.41 293.767 367.43C293.767 362.02 297.307 349.52 297.767 348.43L247.317 348.41Z" fill="#F8CDBA"/>
            <path d="M308.417 308.21C307.197 311.72 297.687 347.99 296.587 352.41" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
            <path d="M669.456 588.747C670.175 591.481 672.975 593.116 675.709 592.397C678.444 591.678 680.078 588.878 679.359 586.143L628.161 391.401C627.442 388.666 624.642 387.032 621.907 387.751C619.172 388.47 617.538 391.27 618.257 394.004L669.456 588.747Z" fill="#969696"/>
            <path d="M617.748 394.013C618.467 391.278 616.833 388.478 614.098 387.759C611.363 387.04 608.564 388.674 607.845 391.409L556.646 586.151C555.927 588.886 557.561 591.686 560.296 592.405C563.031 593.124 565.83 591.49 566.549 588.755L617.748 394.013Z" fill="#969696"/>
            <path d="M547.1 394.011C547.819 391.277 546.185 388.477 543.45 387.758C540.715 387.039 537.915 388.673 537.196 391.408L485.998 586.15C485.279 588.885 486.913 591.685 489.647 592.404C492.382 593.123 495.182 591.488 495.901 588.754L547.1 394.011Z" fill="#D8D8D8"/>
            <path d="M597.917 585.152C598.624 587.895 601.421 589.546 604.163 588.839C606.906 588.132 608.557 585.335 607.85 582.592L557.51 387.273C556.803 384.53 554.006 382.88 551.263 383.587C548.521 384.294 546.87 387.09 547.577 389.833L597.917 585.152Z" fill="#D8D8D8"/>
            <path d="M258.679 394.017C259.398 391.282 257.764 388.482 255.029 387.763C252.294 387.044 249.494 388.678 248.775 391.413L197.577 586.155C196.858 588.89 198.492 591.69 201.227 592.409C203.961 593.128 206.761 591.494 207.48 588.759L258.679 394.017Z" fill="#969696"/>
            <path d="M309.516 588.759C310.235 591.494 313.035 593.128 315.77 592.409C318.505 591.69 320.139 588.89 319.42 586.156L268.221 391.413C267.502 388.679 264.702 387.045 261.968 387.764C259.233 388.483 257.599 391.282 258.318 394.017L309.516 588.759Z" fill="#969696"/>
            <path d="M649.267 378.14H154.097C151.596 378.14 149.567 380.168 149.567 382.67V388.76C149.567 391.262 151.596 393.29 154.097 393.29H649.267C651.769 393.29 653.797 391.262 653.797 388.76V382.67C653.797 380.168 651.769 378.14 649.267 378.14Z" fill="#D8D8D8"/>
            <path d="M185.504 394.02C186.223 391.285 184.589 388.485 181.854 387.766C179.119 387.047 176.319 388.681 175.601 391.416L124.402 586.158C123.683 588.893 125.317 591.693 128.052 592.412C130.786 593.131 133.586 591.497 134.305 588.762L185.504 394.02Z" fill="#D8D8D8"/>
            <path d="M236.341 588.76C237.06 591.494 239.86 593.128 242.595 592.409C245.329 591.691 246.964 588.891 246.245 586.156L195.046 391.414C194.327 388.679 191.527 387.045 188.792 387.764C186.058 388.483 184.423 391.283 185.142 394.017L236.341 588.76Z" fill="#D8D8D8"/>
            <path d="M520.278 378.14H427.768L444.528 320.5C444.946 319.109 445.804 317.891 446.971 317.028C448.139 316.165 449.555 315.702 451.008 315.71H529.508C530.539 315.693 531.559 315.918 532.488 316.366C533.417 316.813 534.229 317.472 534.858 318.289C535.488 319.106 535.918 320.058 536.114 321.071C536.31 322.083 536.267 323.127 535.988 324.12L520.278 378.14Z" fill="black"/>
            <path d="M485.377 352.58C488.503 352.58 491.037 350.046 491.037 346.92C491.037 343.794 488.503 341.26 485.377 341.26C482.251 341.26 479.717 343.794 479.717 346.92C479.717 350.046 482.251 352.58 485.377 352.58Z" fill="white"/>
            <path d="M438.758 374.09H373.848V378.14H438.758V374.09Z" fill="black"/>
        </svg>
    </div>
    <div class="login">
        <p class="welcome">Welcome Mate!</p>
        <div class="login-rec">
            <p class="login-text">Login</p>
            <div class="input-login">
                <form action="" method="post">
                    <table border="0" cellspacing="0" cellpadding="10">
                        <tr><td><label for="email">Name</label></td></tr>
                        <tr><td><input type="text" name="email" id="email" required></td></tr>
                        <tr><td><label for="password">Password</label></td></tr>
                        <tr><td><input type="password" name="password" id="password" required></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td><p>Don't have account? <a href="signup.php">Sign Up</a></p></td></tr>
                        <tr><td><button name="submit" class="btn" type="submit">Login</button></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>