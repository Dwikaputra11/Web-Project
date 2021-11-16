<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        require 'database.php';
    ?>
    <?php
        if(isset($_POST["submit"])){
            if(insertUserAccount($_POST) > 0){
                header("Location: dashboard.php");
                exit;
            }else{
                echo "
                    <script>
                        alert('register unsuccessful);
                    </script>
                ";
            }
        }
    ?>
    <div class="image-desc">
        <div class="image">
            <svg width="640" height="518" viewBox="0 0 640 518" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_17_10364)">
                <path d="M326.637 518C475.609 518 596.374 402.042 596.374 259C596.374 115.958 475.609 0 326.637 0C177.665 0 56.8994 115.958 56.8994 259C56.8994 402.042 177.665 518 326.637 518Z" fill="#DBFFD5"/>
                <path d="M476.336 146.085H310.934V392.018H476.336V146.085Z" fill="white"/>
                <path d="M277.784 296.191H447.373" stroke="black" stroke-miterlimit="10"/>
                <path d="M277.784 312.274H447.373" stroke="black" stroke-miterlimit="10"/>
                <path d="M277.784 328.357H447.373" stroke="black" stroke-miterlimit="10"/>
                <path d="M277.784 344.44H447.373" stroke="black" stroke-miterlimit="10"/>
                <path d="M393.635 259.335C417.532 259.335 436.905 240.734 436.905 217.788C436.905 194.842 417.532 176.241 393.635 176.241C369.738 176.241 350.365 194.842 350.365 217.788C350.365 240.734 369.738 259.335 393.635 259.335Z" fill="#F2F2F2"/>
                <path opacity="0.7" d="M515.767 233.536H447.373V294.516H515.767V233.536Z" fill="#50B89D"/>
                <path d="M469.302 265.443L479.729 269.658V272.922L466.104 266.609V264.177L479.729 257.881V261.146L469.302 265.443ZM467.853 318.253H465.204L475.331 291.918H477.963L467.853 318.253ZM478.146 345.343L467.136 341.029V337.865L481.361 344.161V346.593L467.136 352.906V349.708L478.146 345.343Z" fill="white"/>
                <path d="M394.333 25.1294H25.145V258.33H394.333V25.1294Z" stroke="black" stroke-miterlimit="10"/>
                <path d="M25.145 37.5266H394.333" stroke="black" stroke-miterlimit="10"/>
                <path d="M162.98 58.3H52.0142V164.849H162.98V58.3Z" stroke="black" stroke-miterlimit="10"/>
                <path d="M184.266 67.6816H353.855" stroke="black" stroke-miterlimit="10"/>
                <path d="M184.266 83.7646H353.855" stroke="black" stroke-miterlimit="10"/>
                <path d="M184.266 99.8474H353.855" stroke="black" stroke-miterlimit="10"/>
                <path d="M184.266 115.93H353.855" stroke="black" stroke-miterlimit="10"/>
                <path opacity="0.44" d="M107.497 86.4451L77.2778 136.704H137.716L107.497 86.4451Z" fill="#50B89D"/>
                <path d="M33.1708 34.511C34.9053 34.511 36.3114 33.1609 36.3114 31.4955C36.3114 29.8301 34.9053 28.48 33.1708 28.48C31.4363 28.48 30.0303 29.8301 30.0303 31.4955C30.0303 33.1609 31.4363 34.511 33.1708 34.511Z" fill="#AB8DE5"/>
                <path d="M43.9882 34.511C45.7227 34.511 47.1287 33.1609 47.1287 31.4955C47.1287 29.8301 45.7227 28.48 43.9882 28.48C42.2537 28.48 40.8477 29.8301 40.8477 31.4955C40.8477 33.1609 42.2537 34.511 43.9882 34.511Z" fill="#73E5E2"/>
                <path d="M54.8056 34.511C56.5401 34.511 57.9461 33.1609 57.9461 31.4955C57.9461 29.8301 56.5401 28.48 54.8056 28.48C53.0711 28.48 51.665 29.8301 51.665 31.4955C51.665 33.1609 53.0711 34.511 54.8056 34.511Z" fill="#50B89D"/>
                <path d="M187.755 215.275L198.224 206.396H187.546L187.755 215.275Z" fill="#AB8DE5"/>
                <path d="M243.81 173.225H191.719C183.748 173.225 177.287 179.43 177.287 187.083V193.543C177.287 201.197 183.748 207.401 191.719 207.401H243.81C251.781 207.401 258.243 201.197 258.243 193.543V187.083C258.243 179.43 251.781 173.225 243.81 173.225Z" fill="#AB8DE5"/>
                <path d="M206.947 193.329C208.682 193.329 210.088 191.979 210.088 190.313C210.088 188.648 208.682 187.298 206.947 187.298C205.213 187.298 203.807 188.648 203.807 190.313C203.807 191.979 205.213 193.329 206.947 193.329Z" fill="white"/>
                <path d="M217.765 193.329C219.499 193.329 220.905 191.979 220.905 190.313C220.905 188.648 219.499 187.298 217.765 187.298C216.03 187.298 214.624 188.648 214.624 190.313C214.624 191.979 216.03 193.329 217.765 193.329Z" fill="white"/>
                <path d="M228.582 193.329C230.316 193.329 231.723 191.979 231.723 190.313C231.723 188.648 230.316 187.298 228.582 187.298C226.847 187.298 225.441 188.648 225.441 190.313C225.441 191.979 226.847 193.329 228.582 193.329Z" fill="white"/>
                <path d="M519.256 114.757L508.788 105.878H519.466L519.256 114.757Z" fill="#73E5E2"/>
                <path d="M463.201 106.884L515.292 106.884C523.263 106.884 529.725 100.679 529.725 93.0255V86.5656C529.725 78.912 523.263 72.7076 515.292 72.7076H463.201C455.23 72.7076 448.769 78.912 448.769 86.5656V93.0255C448.769 100.679 455.23 106.884 463.201 106.884Z" fill="#73E5E2"/>
                <path d="M500.064 92.8111C501.799 92.8111 503.205 91.461 503.205 89.7955C503.205 88.1301 501.799 86.78 500.064 86.78C498.33 86.78 496.924 88.1301 496.924 89.7955C496.924 91.461 498.33 92.8111 500.064 92.8111Z" fill="white"/>
                <path d="M489.247 92.8111C490.981 92.8111 492.388 91.461 492.388 89.7955C492.388 88.1301 490.981 86.78 489.247 86.78C487.513 86.78 486.106 88.1301 486.106 89.7955C486.106 91.461 487.513 92.8111 489.247 92.8111Z" fill="white"/>
                <path d="M478.43 92.8111C480.164 92.8111 481.57 91.461 481.57 89.7955C481.57 88.1301 480.164 86.78 478.43 86.78C476.695 86.78 475.289 88.1301 475.289 89.7955C475.289 91.461 476.695 92.8111 478.43 92.8111Z" fill="white"/>
                <path d="M513.674 31.4954C515.408 31.4954 516.814 30.1453 516.814 28.4799C516.814 26.8145 515.408 25.4644 513.674 25.4644C511.939 25.4644 510.533 26.8145 510.533 28.4799C510.533 30.1453 511.939 31.4954 513.674 31.4954Z" fill="#F98B67"/>
                <path d="M520.304 43.8926C522.038 43.8926 523.444 42.5425 523.444 40.8771C523.444 39.2117 522.038 37.8616 520.304 37.8616C518.569 37.8616 517.163 39.2117 517.163 40.8771C517.163 42.5425 518.569 43.8926 520.304 43.8926Z" fill="#F98B67"/>
                <path d="M448.071 167.864C450.769 167.864 452.956 165.764 452.956 163.173C452.956 160.583 450.769 158.483 448.071 158.483C445.373 158.483 443.186 160.583 443.186 163.173C443.186 165.764 445.373 167.864 448.071 167.864Z" fill="#F98B67"/>
                <path d="M476.685 183.947C479.383 183.947 481.57 181.847 481.57 179.256C481.57 176.666 479.383 174.565 476.685 174.565C473.987 174.565 471.8 176.666 471.8 179.256C471.8 181.847 473.987 183.947 476.685 183.947Z" fill="#F98B67"/>
                <path d="M37.0093 189.308C39.7074 189.308 41.8946 187.208 41.8946 184.617C41.8946 182.026 39.7074 179.926 37.0093 179.926C34.3112 179.926 32.124 182.026 32.124 184.617C32.124 187.208 34.3112 189.308 37.0093 189.308Z" fill="#F98B67"/>
                <path d="M459.376 398.887V398.217L457.701 396.206L453.828 391.69L449.71 386.905C449.71 386.905 445.746 384.272 444.727 383.816C441.015 382.168 437.358 380.908 432.989 380.908C430.302 380.908 420.259 381.296 420.238 382.918C420.238 385.324 434.301 394.431 444.616 398.853C449.145 398.887 459.376 398.887 459.376 398.887Z" fill="#1F161E"/>
                <path d="M457.248 398.887C442.934 388.312 413.713 330.635 421.208 309.259C437.162 317.066 454.666 343.984 462.922 366.715C463.366 368.193 463.722 369.694 463.99 371.211L467.34 385.954L468.149 398.907L457.248 398.887Z" fill="#FBDC8E"/>
                <path d="M467.018 398.887C462.189 395.121 460.647 383.97 460.605 379.809C460.528 372.042 461.77 366.319 468.686 357.775C475.603 349.231 473.76 335.058 482.945 325.496C492.129 315.933 498.215 313.266 509.116 313.266C520.017 313.266 523.478 330.233 523.423 334.502C523.297 351.724 511.998 354.163 505.103 362.379C500.099 368.343 499.708 373.221 498.194 376.009C490.07 391.033 483.468 396.682 478.583 398.887" fill="#73E5E2"/>
                <path d="M469.685 397.641C469.824 368.269 502.06 324.156 508.948 317.542" stroke="white" stroke-width="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M471.423 384.292C467.856 380.559 464.611 369.978 465.1 367.23" stroke="white" stroke-width="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M462.287 396.354C457.234 387.756 433.261 345.834 424.321 314.955" stroke="white" stroke-width="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M478.611 398.887H493.63L481.068 443.785H447.478L435.118 398.887H478.611Z" fill="#B37361"/>
                <path d="M425.152 383.829C432.473 384.312 441.686 384.633 448.183 388.889" stroke="white" stroke-width="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M541.198 215.107C539.433 223.196 526.605 323.526 530.8 347.489C534.994 371.452 603.381 421.664 606.375 422.542C609.865 420.083 615.001 412.021 615.001 412.021C615.001 412.021 564.857 356.207 563.901 353.969C562.945 351.731 574.886 222.479 574.886 222.479L541.198 215.107Z" fill="#1F161E"/>
                <path d="M622.867 233.368L571.704 433.74H554.473L571.934 224.71L622.867 233.368Z" fill="#AB8DE5"/>
                <path d="M586.526 118.644C593.589 118.644 630.431 119.79 637.089 132.241C643.747 144.692 637.473 202.241 633.334 204.473C631.101 205.672 630.494 204.506 629.845 206.946C629.196 209.385 622.866 233.368 622.866 233.368C618.846 233.475 560.236 224.998 541.212 215.087C541.323 212.333 542.245 205.17 542.245 204.62C539.718 205.612 536.661 205.82 535.824 204.62C528.398 193.825 539.467 137.542 547.409 126.217C550.787 121.358 575.192 118.678 586.526 118.644Z" fill="#FBDC8E"/>
                <path d="M610.785 206.027C612.516 206.027 627.416 216.079 626.139 221.018C627.186 217.051 630.48 204.794 630.48 204.794C629.063 205.056 612.055 206.048 610.785 206.027Z" fill="#1F161E"/>
                <path d="M595.648 125.211C595.648 127.396 577.705 127.396 577.705 125.211V103.097H595.648V125.211Z" fill="#F8CDBA"/>
                <path d="M585.354 108.331C586.75 108.331 595.649 112.11 595.649 114.215V103.097C593.429 103.097 585.354 108.331 585.354 108.331Z" fill="#1F161E"/>
                <path d="M582.898 109.946C592.538 109.946 600.352 102.442 600.352 93.1864C600.352 83.9303 592.538 76.4268 582.898 76.4268C573.258 76.4268 565.443 83.9303 565.443 93.1864C565.443 102.442 573.258 109.946 582.898 109.946Z" fill="#F8CDBA"/>
                <path d="M576.993 68.687C568.032 68.687 562.449 74.0881 562.449 81.0105C562.449 86.7668 563.901 90.0235 565.611 90.8478C566.692 85.259 569.044 82.6723 570.991 81.5599C572.506 82.6723 575.095 85.3662 578.557 86.1972C582.018 87.0281 591.028 86.8673 598.307 91.9468C600.687 89.8694 603.06 87.1688 603.06 83.9858C603.06 80.8027 601.594 76.8088 592.975 74.5036C587.28 72.9825 586.485 68.687 576.993 68.687Z" fill="#1F161E"/>
                <path d="M566.588 98.1654C568.276 98.1654 569.645 97.4813 569.645 96.6375C569.645 95.7937 568.276 95.1096 566.588 95.1096C564.9 95.1096 563.531 95.7937 563.531 96.6375C563.531 97.4813 564.9 98.1654 566.588 98.1654Z" fill="#FA9E9F"/>
                <path d="M585.815 98.1654C587.503 98.1654 588.871 97.4813 588.871 96.6375C588.871 95.7937 587.503 95.1096 585.815 95.1096C584.126 95.1096 582.758 95.7937 582.758 96.6375C582.758 97.4813 584.126 98.1654 585.815 98.1654Z" fill="#FA9E9F"/>
                <path d="M574.055 93.4678C573.483 94.2518 570.565 97.5421 573.643 98.8689" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M579.806 102.716C580.727 102.716 582.144 101.617 582.89 100.632" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M599.033 98.9897C601.261 98.9897 603.067 97.2556 603.067 95.1164C603.067 92.9773 601.261 91.2432 599.033 91.2432C596.805 91.2432 594.999 92.9773 594.999 95.1164C594.999 97.2556 596.805 98.9897 599.033 98.9897Z" fill="#F8CDBA"/>
                <path d="M611.191 151.621C610.877 155.32 609.649 173.6 610.109 176.006C604.254 177.963 550.641 202.375 541.366 205.056" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M548.925 145.851C547.689 149.992 543.53 168.789 546.454 177.521" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M562.61 196.505C565.402 198.388 592.159 209.76 629.155 205.471" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M560.048 177.521C561.842 177.795 555.994 173.312 552.679 174.981C549.364 176.649 544.897 184.202 545.811 185.951C545.934 186.268 546.13 186.555 546.384 186.79C546.638 187.025 546.944 187.203 547.278 187.31C547.613 187.416 547.969 187.45 548.319 187.407C548.669 187.364 549.004 187.247 549.301 187.063C550.201 186.507 556.922 177.038 560.048 177.521Z" fill="#F8CDBA"/>
                <path d="M614.429 412.845C615.385 413.516 623.865 419.024 623.935 422.495C624.004 425.966 616.034 437.472 614.429 437.801C612.824 438.129 611.679 436.829 611.679 434.504C611.679 432.178 614.708 428.104 614.304 426.295C613.899 424.485 609.984 421.175 607.974 421.115" fill="#1F161E"/>
                <path d="M570.071 433.74C570.071 435.335 571.034 445.346 569.107 446.278C567.181 447.209 545.923 447.759 544.96 446.834C543.997 445.909 543.411 443.959 544.262 443.403C545.114 442.847 553.335 441.265 554.452 440.528C555.568 439.791 557.111 435.837 556.545 433.74" fill="#1F161E"/>
                <path d="M153.112 359.41H18.1523V425.142H153.112V359.41Z" fill="#B37361"/>
                <path d="M219.601 328.605C220.187 331.956 230.139 408.557 231.751 409.823C233.363 411.09 250.483 413.897 251.948 411.793C252.241 408.443 252.646 355.021 253.553 350.243" fill="#1F161E"/>
                <path d="M27.0507 312.623C20.1485 309.359 34.5391 374.052 72.414 374.052C110.289 374.052 174.042 318.654 184.364 318.654C207.15 318.654 261.091 361.608 265.32 361.608C268.558 358.499 275.035 353.058 275.035 350.886C275.035 348.715 223.39 267.122 184.748 267.122C169.764 267.142 42.6347 320.014 27.0507 312.623Z" fill="#50B89D"/>
                <path d="M48.3644 313.722C55.9366 312.073 65.3582 307.805 73.6981 303.442C51.0095 310.565 32.4175 315.169 27.0506 312.623C23.3937 310.894 25.7107 328.21 34.3088 344.889C32.7525 341.666 30.5331 317.635 48.3644 313.722Z" fill="#1F161E"/>
                <path d="M65.0577 200.231C71.0248 200.385 102.088 199.507 110.603 207.294C116.918 213.07 136.557 262.746 139.586 280.189C126.396 286.629 31.2586 330.368 1.81426 311.135C1.16522 296.192 4.18712 236.786 23.4421 205.632C30.4839 201.129 59.321 200.09 65.0577 200.231Z" fill="#73E5E2"/>
                <path d="M77.1595 186.018H59.0142V204.741C59.0142 209.432 77.1595 209.392 77.1595 204.741V186.018Z" fill="#F8CDBA"/>
                <path d="M59.0142 197.323C59.0142 195.245 65.0091 190.025 68.7149 190.213C68.8057 187.901 60.2494 184.577 60.2494 184.577L59.0142 187.773V197.323Z" fill="#1F161E"/>
                <path d="M96.1633 186.018C96.5707 184.205 96.7766 182.357 96.7774 180.503C96.7774 166.685 85.5343 155.48 71.6531 155.48C57.7719 155.48 46.5288 166.685 46.5288 180.503C46.5296 182.357 46.7355 184.205 47.143 186.018H96.1633Z" fill="#1F161E"/>
                <path d="M89.5404 169.151C86.4627 168.702 83.3919 166.377 81.2494 164.855C69.0362 173.446 61.2127 173.56 60.3683 173.56C59.5238 173.56 56.0832 178.305 54.499 178.841L54.3594 178.76C54.8304 181.257 55.837 183.632 57.3152 185.735C58.7935 187.837 60.7111 189.622 62.9462 190.975C65.1814 192.328 67.6851 193.22 70.2985 193.594C72.9118 193.968 75.5776 193.816 78.1264 193.147C80.6753 192.479 83.0515 191.309 85.1041 189.711C87.1566 188.114 88.8407 186.124 90.0493 183.867C91.2579 181.611 91.9646 179.139 92.1245 176.606C92.2844 174.074 91.894 171.537 90.9781 169.158C90.5004 169.212 90.0175 169.21 89.5404 169.151Z" fill="#F8CDBA"/>
                <path d="M58.044 158.597C62.1374 158.597 65.4557 155.41 65.4557 151.48C65.4557 147.55 62.1374 144.363 58.044 144.363C53.9506 144.363 50.6323 147.55 50.6323 151.48C50.6323 155.41 53.9506 158.597 58.044 158.597Z" fill="#1F161E"/>
                <path d="M61.3451 173.178C60.5442 173.215 59.7886 173.546 59.2352 174.103C58.6818 174.66 58.373 175.4 58.373 176.17C58.373 176.94 58.6818 177.681 59.2352 178.238C59.7886 178.795 60.5442 179.126 61.3451 179.162" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M85.1016 173.56C86.0158 174.733 88.3677 176.79 85.1016 178.968" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M75.1982 180.536C75.1982 181.414 75.5891 183.511 77.5502 184.054" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M69.12 180.744C70.708 180.744 71.9953 180.102 71.9953 179.31C71.9953 178.518 70.708 177.876 69.12 177.876C67.532 177.876 66.2446 178.518 66.2446 179.31C66.2446 180.102 67.532 180.744 69.12 180.744Z" fill="#FA9E9F"/>
                <path d="M90.4964 180.744C92.0844 180.744 93.3717 180.102 93.3717 179.31C93.3717 178.518 92.0844 177.876 90.4964 177.876C88.9084 177.876 87.6211 178.518 87.6211 179.31C87.6211 180.102 88.9084 180.744 90.4964 180.744Z" fill="#FA9E9F"/>
                <path d="M109.947 252.011L129.341 247.219C131.205 250.262 140.277 280.156 140.277 280.156L110.338 292.271C110.728 286.609 111.908 260.675 109.947 252.011Z" fill="#F8CDBA"/>
                <path d="M41.9438 247.327C41.9438 249.578 39.9687 258.149 38.8032 262.176" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M109.947 252.011C109.479 248.466 106.743 228.49 102.088 217.976" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M109.947 252.011L129.341 247.219C131.205 250.262 140.277 280.156 140.277 280.156L110.338 292.271C110.728 286.609 111.908 260.675 109.947 252.011Z" fill="#F8CDBA"/>
                <path d="M265.899 360.027C266.332 360.697 272.11 367.505 274.155 367.579C276.2 367.653 288.615 359.578 288.071 357.842C287.527 356.107 279.738 357.239 278.398 356.629C277.058 356.02 274.064 353.151 273.576 351.878" fill="#1F161E"/>
                <path d="M235.366 410.534C235.219 411.277 234.431 420.049 235.848 421.47C237.264 422.891 252.039 425.357 252.897 423.742C253.756 422.127 247.314 417.751 246.818 416.424C246.323 415.097 246.218 411.063 246.818 409.803" fill="#1F161E"/>
                <path d="M212.202 282.032H146.481L162.128 242.22H227.849L212.202 282.032Z" fill="#969696"/>
                <path d="M157.439 280.531H91.7178V282.032H157.439V280.531Z" fill="#969696"/>
                <path d="M38.8031 262.176C37.5399 266.706 31.4054 286.14 33.9039 289.49C36.4023 292.841 98.9758 285.249 115.718 280.243C119.983 278.903 123.144 275.391 125.035 274.935C127.464 274.541 129.959 275.022 132.04 276.286C134.122 277.55 135.644 279.508 136.313 281.784C129.628 284.893 33.0943 332.217 1.81454 311.155C-4.09665 307.088 6.27411 257.499 6.74868 255C12.0318 255.609 38.8031 262.176 38.8031 262.176Z" fill="#F8CDBA"/>
                <path d="M110.84 281.449C112.724 281.02 114.371 280.598 115.725 280.196C119.989 278.856 123.151 275.344 125.042 274.888C127.471 274.494 129.965 274.975 132.047 276.239C134.129 277.503 135.651 279.461 136.32 281.737" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round"/>
                </g>
                <defs>
                <clipPath id="clip0_17_10364">
                <rect width="640" height="518" fill="white"/>
                </clipPath>
                </defs>
            </svg>
        </div>
        <div class="desc">
            <h1>Quick Daily</h1>
            <p>Save your daily activity with us!</p>
            <p>Make easy and fun</p>
        </div>
    </div>
    <div class="signup-rec">
        <p class="signup-title">Sign Up</p>
        <div class="signup-input">
            <form action="" method="post">
                <table border="0" cellspacing="0" cellpadding="8">
                    <tr><td><label for="email">Email</label></td></tr>
                    <tr><td><input type="text" name="email" id="email" required></td></tr>
                    <tr><td></td></tr>
                    <tr><td><label for="username">Username</label></td></tr>
                    <tr><td><input type="text" name="username" id="username" required></td></tr>
                    <tr><td></td></tr>
                    <tr><td><label for="birth_date">Date of Birth</label></td></tr>
                    <tr><td><input type="date" name="birth_date" id="birth_date" required></td></tr>
                    <tr><td></td></tr>
                    <tr><td><label for="country">Country</label></td></tr>
                    <tr><td><input type="text" name="country" id="country" required></td></tr>
                    <tr><td></td></tr>
                    <tr><td><label for="pass">Password</label></td></tr>
                    <tr><td><input type="password" name="password" id="password" required></td></tr>
                    <tr><td></td></tr>
                    <tr><td><label for="valpassword">Confirm Password</label></td></tr>
                    <tr><td><input type="password" name="valpassword" id="valpassword" required></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><p>Already have account? <a href="login.php">Login</a></p></td></tr>
                    <tr><td><button name="submit" class="btn" type="submit">Sign Up</button></td></tr>
                </table>
            </form>
        </div>
    </div>

</body>
</html>