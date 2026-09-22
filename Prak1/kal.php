```php
<?php

/*
|--------------------------------------------------------------------------
| KALKULATOR PHP - ROCKET EDITION 🚀
|--------------------------------------------------------------------------
| Fitur tambahan:
| 1. Roket terbang berdasarkan besar hasil
| 2. Warna kalkulator berubah berdasarkan hasil
| 3. Level hasil perhitungan
| 4. Efek api roket
| 5. Efek bintang dan glow
| 6. Validasi pembagian dengan 0
|--------------------------------------------------------------------------
*/

$hasil = null;
$pesan = '';
$ekspresi = '';

/*
|--------------------------------------------------------------------------
| FUNGSI PERHITUNGAN
|--------------------------------------------------------------------------
*/

function hitungKalkulator($ekspresi)
{
    $ekspresi = trim($ekspresi);

    if ($ekspresi === '') {
        return [
            'success' => false,
            'message' => 'Silakan masukkan angka terlebih dahulu.'
        ];
    }

    /*
     * Hanya karakter matematika yang diperbolehkan.
     */
    if (!preg_match('/^[0-9+\-*\/%.() ]+$/', $ekspresi)) {
        return [
            'success' => false,
            'message' => 'Ekspresi mengandung karakter yang tidak valid.'
        ];
    }

    /*
     * Mencegah pembagian dengan angka 0.
     */
    if (
        preg_match(
            '/\/\s*0+(?:\.0+)?(?:\D|$)/',
            $ekspresi
        )
    ) {
        return [
            'success' => false,
            'message' => '🚫 Tidak dapat membagi dengan angka 0.'
        ];
    }

    /*
     * Validasi struktur perhitungan.
     */
    if (
        !preg_match(
            '/^[0-9.]+(?:\s*[\+\-\*\/%]\s*[0-9.]+)*$/',
            $ekspresi
        )
    ) {
        return [
            'success' => false,
            'message' => 'Format perhitungan tidak valid.'
        ];
    }

    try {

        /*
         * Ekspresi sudah divalidasi sebelum eval.
         */
        $nilai = eval("return $ekspresi;");

        if (
            !is_numeric($nilai) ||
            is_infinite($nilai) ||
            is_nan($nilai)
        ) {
            return [
                'success' => false,
                'message' => 'Hasil perhitungan tidak valid.'
            ];
        }

        /*
         * Membatasi angka desimal.
         */
        $nilai = round($nilai, 10);

        return [
            'success' => true,
            'result' => $nilai
        ];

    } catch (Throwable $e) {

        return [
            'success' => false,
            'message' => 'Terjadi kesalahan dalam perhitungan.'
        ];
    }
}


/*
|--------------------------------------------------------------------------
| PROSES PHP
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $aksi = $_POST['aksi'] ?? '';

    $ekspresi =
        trim($_POST['ekspresi'] ?? '');

    if ($aksi === 'hitung') {

        $proses =
            hitungKalkulator($ekspresi);

        if ($proses['success']) {

            $hasil =
                $proses['result'];

        } else {

            $pesan =
                $proses['message'];
        }
    }
}

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Kalkulator Rocket 🚀</title>


<style>

/*
|--------------------------------------------------------------------------
| RESET
|--------------------------------------------------------------------------
*/

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}


/*
|--------------------------------------------------------------------------
| BODY
|--------------------------------------------------------------------------
*/

body {

    min-height: 100vh;

    display: flex;

    justify-content: center;

    align-items: center;

    padding: 25px;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    background:
        radial-gradient(
            circle at top,
            #20204f,
            #080812 65%
        );

    color: white;

    overflow-x: hidden;

    transition:
        background 0.8s ease;
}


/*
|--------------------------------------------------------------------------
| SPACE BACKGROUND
|--------------------------------------------------------------------------
*/

.space {

    position: fixed;

    inset: 0;

    pointer-events: none;

    overflow: hidden;

    z-index: 0;
}


/*
|--------------------------------------------------------------------------
| BINTANG
|--------------------------------------------------------------------------
*/

.star {

    position: absolute;

    width: 3px;

    height: 3px;

    background: white;

    border-radius: 50%;

    opacity: 0.7;

    animation:
        twinkle
        2s
        infinite
        alternate;
}

.star:nth-child(1) {
    top: 8%;
    left: 10%;
}

.star:nth-child(2) {
    top: 20%;
    left: 80%;
    animation-delay: .4s;
}

.star:nth-child(3) {
    top: 35%;
    left: 25%;
    animation-delay: .8s;
}

.star:nth-child(4) {
    top: 60%;
    left: 90%;
    animation-delay: 1.1s;
}

.star:nth-child(5) {
    top: 75%;
    left: 15%;
    animation-delay: .6s;
}

.star:nth-child(6) {
    top: 88%;
    left: 70%;
    animation-delay: 1.5s;
}

.star:nth-child(7) {
    top: 45%;
    left: 65%;
    animation-delay: 1s;
}

.star:nth-child(8) {
    top: 12%;
    left: 48%;
    animation-delay: .2s;
}

.star:nth-child(9) {
    top: 70%;
    left: 48%;
    animation-delay: 1.3s;
}

.star:nth-child(10) {
    top: 28%;
    left: 5%;
    animation-delay: .9s;
}


@keyframes twinkle {

    from {
        opacity: .25;
        transform: scale(.7);
    }

    to {
        opacity: 1;
        transform: scale(1.4);
    }
}


/*
|--------------------------------------------------------------------------
| CALCULATOR
|--------------------------------------------------------------------------
*/

.calculator {

    position: relative;

    z-index: 5;

    width: 400px;

    max-width: 100%;

    padding: 22px;

    border-radius: 32px;

    background:
        linear-gradient(
            145deg,
            rgba(35,35,45,.98),
            rgba(15,15,20,.98)
        );

    border:
        1px solid
        rgba(255,255,255,.1);

    box-shadow:
        0 30px 80px
        rgba(0,0,0,.65),

        inset
        0 1px 0
        rgba(255,255,255,.08);

    transition:
        background 0.8s ease,
        box-shadow 0.8s ease,
        transform 0.4s ease;
}


/*
|--------------------------------------------------------------------------
| TEMA HASIL
|--------------------------------------------------------------------------
*/

/* HASIL NEGATIF */

.calculator.theme-negative {

    background:
        linear-gradient(
            145deg,
            #3a182d,
            #160c1c
        );

    box-shadow:
        0 30px 90px
        rgba(220,40,100,.35);
}


/* HASIL KECIL */

.calculator.theme-small {

    background:
        linear-gradient(
            145deg,
            #152b4d,
            #0b1428
        );

    box-shadow:
        0 30px 90px
        rgba(30,120,255,.35);
}


/* HASIL SEDANG */

.calculator.theme-medium {

    background:
        linear-gradient(
            145deg,
            #123d32,
            #081d18
        );

    box-shadow:
        0 30px 90px
        rgba(30,220,130,.35);
}


/* HASIL BESAR */

.calculator.theme-large {

    background:
        linear-gradient(
            145deg,
            #4b2b0d,
            #211105
        );

    box-shadow:
        0 30px 100px
        rgba(255,140,20,.45);
}


/* HASIL SUPER BESAR */

.calculator.theme-mega {

    background:
        linear-gradient(
            145deg,
            #4c174f,
            #180b25
        );

    box-shadow:
        0 30px 120px
        rgba(255,50,220,.55);

    animation:
        megaGlow
        2s
        infinite
        alternate;
}


@keyframes megaGlow {

    from {
        box-shadow:
            0 30px 80px
            rgba(255,50,220,.35);
    }

    to {
        box-shadow:
            0 30px 130px
            rgba(255,50,220,.7);
    }
}


/*
|--------------------------------------------------------------------------
| ROCKET AREA
|--------------------------------------------------------------------------
*/

.rocket-space {

    position: relative;

    height: 145px;

    margin-bottom: 10px;

    overflow: visible;

    display: flex;

    justify-content: center;

    align-items: flex-end;
}


/*
|--------------------------------------------------------------------------
| ROCKET
|--------------------------------------------------------------------------
*/

.rocket {

    position: absolute;

    bottom: 5px;

    font-size: 58px;

    transform:
        rotate(-8deg);

    filter:
        drop-shadow(
            0 0 12px
            rgba(255,255,255,.35)
        );

    transition:
        bottom 1s cubic-bezier(.2,.8,.2,1),
        transform .6s ease,
        filter .6s ease;

    z-index: 3;
}


/*
|--------------------------------------------------------------------------
| API ROCKET
|--------------------------------------------------------------------------
*/

.rocket.launch {

    animation:
        rocketShake
        .35s
        infinite
        alternate;
}


@keyframes rocketShake {

    from {
        transform:
            translateX(-2px)
            rotate(-8deg);
    }

    to {
        transform:
            translateX(2px)
            rotate(-8deg);
    }
}


/*
|--------------------------------------------------------------------------
| API ROCKET FLAME
|--------------------------------------------------------------------------
*/

.flame {

    position: absolute;

    left: 50%;

    transform:
        translateX(-50%);

    bottom: -27px;

    font-size: 30px;

    opacity: 0;

    transition:
        opacity .3s ease,
        transform .3s ease;
}


.rocket.launch .flame {

    opacity: 1;

    animation:
        flame
        .15s
        infinite
        alternate;
}


@keyframes flame {

    from {
        transform:
            translateX(-50%)
            scaleY(.8);
    }

    to {
        transform:
            translateX(-50%)
            scaleY(1.25);
    }
}


/*
|--------------------------------------------------------------------------
| ROCKET STATUS
|--------------------------------------------------------------------------
*/

.rocket-status {

    position: absolute;

    top: 0;

    left: 50%;

    transform:
        translateX(-50%);

    background:
        rgba(0,0,0,.35);

    border:
        1px solid
        rgba(255,255,255,.08);

    padding:
        7px 13px;

    border-radius: 20px;

    font-size: 11px;

    color: #aaa;

    white-space: nowrap;
}


/*
|--------------------------------------------------------------------------
| HEADER
|--------------------------------------------------------------------------
*/

.header {

    display: flex;

    justify-content:
        space-between;

    align-items: center;

    margin-bottom: 16px;
}


.header h1 {

    font-size: 21px;

    letter-spacing: .3px;
}


.header span {

    font-size: 11px;

    color: #777;
}


/*
|--------------------------------------------------------------------------
| DISPLAY
|--------------------------------------------------------------------------
*/

.display-box {

    min-height: 125px;

    padding: 20px;

    border-radius: 22px;

    background:
        rgba(0,0,0,.28);

    margin-bottom: 18px;

    display: flex;

    flex-direction: column;

    justify-content: flex-end;

    border:
        1px solid
        rgba(255,255,255,.06);
}


.previous {

    min-height: 20px;

    text-align: right;

    color: #777;

    font-size: 13px;

    margin-bottom: 7px;

    overflow: hidden;

    white-space: nowrap;

    text-overflow: ellipsis;
}


.display {

    text-align: right;

    font-size: 42px;

    font-weight: 500;

    white-space: nowrap;

    overflow-x: auto;

    scrollbar-width: none;
}


.display::-webkit-scrollbar {
    display: none;
}


/*
|--------------------------------------------------------------------------
| RESULT INFO
|--------------------------------------------------------------------------
*/

.result-info {

    text-align: center;

    margin-bottom: 14px;

    min-height: 22px;

    font-size: 13px;

    color: #aaa;

    transition:
        color .5s ease;
}


/*
|--------------------------------------------------------------------------
| ERROR
|--------------------------------------------------------------------------
*/

.error {

    padding: 11px;

    margin-bottom: 14px;

    border-radius: 12px;

    background:
        rgba(255,40,70,.12);

    color: #ff7777;

    text-align: center;

    font-size: 13px;
}


/*
|--------------------------------------------------------------------------
| BUTTON GRID
|--------------------------------------------------------------------------
*/

.buttons {

    display: grid;

    grid-template-columns:
        repeat(4,1fr);

    gap: 10px;
}


/*
|--------------------------------------------------------------------------
| BUTTON
|--------------------------------------------------------------------------
*/

.calc-button {

    height: 65px;

    border: none;

    border-radius: 20px;

    font-size: 19px;

    font-weight: 600;

    cursor: pointer;

    transition:
        transform .1s ease,
        filter .15s ease,
        box-shadow .3s ease;
}


.calc-button:hover {

    filter: brightness(1.15);
}


.calc-button:active {

    transform:
        scale(.92);
}


/*
|--------------------------------------------------------------------------
| NUMBER
|--------------------------------------------------------------------------
*/

.number {

    background: #303038;

    color: white;
}


/*
|--------------------------------------------------------------------------
| OPERATOR
|--------------------------------------------------------------------------
*/

.operator {

    background:
        linear-gradient(
            145deg,
            #ffad2f,
            #e87900
        );

    color: white;

    box-shadow:
        0 5px 15px
        rgba(255,140,0,.12);
}


/*
|--------------------------------------------------------------------------
| FUNCTION
|--------------------------------------------------------------------------
*/

.function {

    background: #9d9da4;

    color: #111;
}


/*
|--------------------------------------------------------------------------
| EQUAL
|--------------------------------------------------------------------------
*/

.equal {

    background:
        linear-gradient(
            145deg,
            #25d366,
            #0da94d
        );

    color: white;

    box-shadow:
        0 6px 18px
        rgba(30,210,100,.2);
}


/*
|--------------------------------------------------------------------------
| ZERO
|--------------------------------------------------------------------------
*/

.zero {

    grid-column:
        span 2;
}


/*
|--------------------------------------------------------------------------
| HISTORY
|--------------------------------------------------------------------------
*/

.history {

    margin-top: 18px;

    padding-top: 14px;

    border-top:
        1px solid
        rgba(255,255,255,.08);
}


.history-title {

    font-size: 12px;

    color: #777;

    margin-bottom: 8px;
}


.history-list {

    display: flex;

    flex-direction: column;

    gap: 5px;

    max-height: 90px;

    overflow-y: auto;
}


.history-item {

    padding: 7px 10px;

    border-radius: 8px;

    background:
        rgba(255,255,255,.04);

    color: #999;

    font-size: 11px;

    text-align: right;
}


/*
|--------------------------------------------------------------------------
| FOOTER
|--------------------------------------------------------------------------
*/

.footer {

    text-align: center;

    margin-top: 14px;

    color: #555;

    font-size: 10px;
}


/*
|--------------------------------------------------------------------------
| RESPONSIVE
|--------------------------------------------------------------------------
*/

@media (max-width:430px) {

    body {
        padding: 12px;
    }

    .calculator {
        padding: 16px;
    }

    .rocket-space {
        height: 125px;
    }

    .rocket {
        font-size: 48px;
    }

    .calc-button {
        height: 58px;
        border-radius: 17px;
    }

    .display {
        font-size: 34px;
    }
}

</style>

</head>


<body>


<!--
|--------------------------------------------------------------------------
| BACKGROUND SPACE
|--------------------------------------------------------------------------
-->

<div class="space">

    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>

</div>


<!--
|--------------------------------------------------------------------------
| CALCULATOR
|--------------------------------------------------------------------------
-->

<div
    class="calculator"
    id="calculator"
>


    <!--
    |--------------------------------------------------------------------------
    | ROCKET
    |--------------------------------------------------------------------------
    -->

    <div class="rocket-space">

        <div
            class="rocket-status"
            id="rocketStatus"
        >
            🚀 Siap diluncurkan
        </div>


        <div
            class="rocket"
            id="rocket"
        >

            🚀

            <div
                class="flame"
                id="flame"
            >
                🔥
            </div>

        </div>

    </div>


    <!-- HEADER -->

    <div class="header">

        <h1>
            🚀 Rocket Calculator
        </h1>

        <span>
            PHP Edition
        </span>

    </div>


    <!-- DISPLAY -->

    <div class="display-box">

        <div
            class="previous"
            id="previousDisplay"
        >
        </div>


        <div
            class="display"
            id="display"
        >
            0
        </div>

    </div>


    <!-- RESULT STATUS -->

    <div
        class="result-info"
        id="resultInfo"
    >
        Masukkan perhitungan untuk meluncurkan roket 🚀
    </div>


    <!-- ERROR -->

    <?php if ($pesan !== ''): ?>

        <div class="error">

            <?= htmlspecialchars($pesan) ?>

        </div>

    <?php endif; ?>


    <!-- FORM -->

    <form
        method="post"
        id="calculatorForm"
    >

        <input
            type="hidden"
            name="aksi"
            value="hitung"
        >

        <input
            type="hidden"
            name="ekspresi"
            id="expressionInput"
        >


        <div class="buttons">


            <!-- BARIS 1 -->

            <button
                type="button"
                class="calc-button function"
                id="clearButton"
            >
                AC
            </button>


            <button
                type="button"
                class="calc-button function"
                id="deleteButton"
            >
                DEL
            </button>


            <button
                type="button"
                class="calc-button function"
                id="percentButton"
            >
                %
            </button>


            <button
                type="button"
                class="calc-button operator"
                data-operator="/"
            >
                ÷
            </button>


            <!-- BARIS 2 -->

            <button
                type="button"
                class="calc-button number"
                data-number="7"
            >
                7
            </button>


            <button
                type="button"
                class="calc-button number"
                data-number="8"
            >
                8
            </button>


            <button
                type="button"
                class="calc-button number"
                data-number="9"
            >
                9
            </button>


            <button
                type="button"
                class="calc-button operator"
                data-operator="*"
            >
                ×
            </button>


            <!-- BARIS 3 -->

            <button
                type="button"
                class="calc-button number"
                data-number="4"
            >
                4
            </button>


            <button
                type="button"
                class="calc-button number"
                data-number="5"
            >
                5
            </button>


            <button
                type="button"
                class="calc-button number"
                data-number="6"
            >
                6
            </button>


            <button
                type="button"
                class="calc-button operator"
                data-operator="-"
            >
                −
            </button>


            <!-- BARIS 4 -->

            <button
                type="button"
                class="calc-button number"
                data-number="1"
            >
                1
            </button>


            <button
                type="button"
                class="calc-button number"
                data-number="2"
            >
                2
            </button>


            <button
                type="button"
                class="calc-button number"
                data-number="3"
            >
                3
            </button>


            <button
                type="button"
                class="calc-button operator"
                data-operator="+"
            >
                +
            </button>


            <!-- BARIS 5 -->

            <button
                type="button"
                class="calc-button function"
                id="squareButton"
            >
                x²
            </button>


            <button
                type="button"
                class="calc-button number zero"
                data-number="0"
            >
                0
            </button>


            <button
                type="button"
                class="calc-button number"
                data-number="."
            >
                .
            </button>


            <!-- BARIS 6 -->

            <button
                type="button"
                class="calc-button function"
                id="sqrtButton"
            >
                √
            </button>


            <button
                type="button"
                class="calc-button function"
                id="signButton"
            >
                ±
            </button>


            <button
                type="button"
                class="calc-button equal"
                id="equalButton"
            >
                =
            </button>

        </div>

    </form>


    <!-- HISTORY -->

    <div class="history">

        <div class="history-title">
            📜 Riwayat
        </div>


        <div
            class="history-list"
            id="historyList"
        >
        </div>

    </div>


    <div class="footer">

        Rocket Calculator • PHP

    </div>

</div>


<script>

/*
|--------------------------------------------------------------------------
| STATE
|--------------------------------------------------------------------------
*/

let expression = '';

let justCalculated = false;


/*
|--------------------------------------------------------------------------
| ELEMENT
|--------------------------------------------------------------------------
*/

const display =
    document.getElementById('display');

const previousDisplay =
    document.getElementById('previousDisplay');

const expressionInput =
    document.getElementById('expressionInput');

const calculatorForm =
    document.getElementById('calculatorForm');

const historyList =
    document.getElementById('historyList');

const calculator =
    document.getElementById('calculator');

const rocket =
    document.getElementById('rocket');

const rocketStatus =
    document.getElementById('rocketStatus');

const resultInfo =
    document.getElementById('resultInfo');


/*
|--------------------------------------------------------------------------
| DISPLAY
|--------------------------------------------------------------------------
*/

function updateDisplay() {

    if (expression === '') {

        display.textContent = '0';

    } else {

        display.textContent =
            expression
                .replace(/\*/g, '×')
                .replace(/\//g, '÷');
    }

    expressionInput.value =
        expression;
}


/*
|--------------------------------------------------------------------------
| ANGKA
|--------------------------------------------------------------------------
*/

document
    .querySelectorAll('[data-number]')
    .forEach(button => {

        button.addEventListener(
            'click',
            () => {

                const number =
                    button.dataset.number;


                if (justCalculated) {

                    expression = '';

                    previousDisplay.textContent = '';

                    justCalculated = false;
                }


                /*
                Validasi desimal.
                */

                if (number === '.') {

                    const parts =
                        expression.split(
                            /[\+\-\*\/%]/
                        );

                    const lastNumber =
                        parts[
                            parts.length - 1
                        ];


                    if (
                        lastNumber.includes('.')
                    ) {

                        return;
                    }


                    if (
                        lastNumber === ''
                    ) {

                        expression += '0';
                    }
                }


                expression += number;

                updateDisplay();

            }
        );

    });


/*
|--------------------------------------------------------------------------
| OPERATOR
|--------------------------------------------------------------------------
*/

document
    .querySelectorAll('[data-operator]')
    .forEach(button => {

        button.addEventListener(
            'click',
            () => {

                const operator =
                    button.dataset.operator;


                if (expression === '') {
                    return;
                }


                /*
                Mencegah operator ganda.
                */

                if (
                    /[\+\-\*\/%]$/
                        .test(expression)
                ) {

                    expression =
                        expression.slice(0,-1);
                }


                expression += operator;

                justCalculated = false;

                updateDisplay();

            }
        );

    });


/*
|--------------------------------------------------------------------------
| AC
|--------------------------------------------------------------------------
*/

document
    .getElementById('clearButton')
    .addEventListener(
        'click',
        () => {

            expression = '';

            previousDisplay.textContent = '';

            justCalculated = false;

            resetRocket();

            updateDisplay();

        }
    );


/*
|--------------------------------------------------------------------------
| DELETE
|--------------------------------------------------------------------------
*/

document
    .getElementById('deleteButton')
    .addEventListener(
        'click',
        () => {

            expression =
                expression.slice(0,-1);

            justCalculated = false;

            updateDisplay();

        }
    );


/*
|--------------------------------------------------------------------------
| PERCENT
|--------------------------------------------------------------------------
*/

document
    .getElementById('percentButton')
    .addEventListener(
        'click',
        () => {

            const match =
                expression.match(
                    /(\d+(?:\.\d+)?)$/
                );


            if (!match) {
                return;
            }


            const number =
                parseFloat(match[1]);


            const percentage =
                number / 100;


            expression =
                expression.slice(
                    0,
                    -match[1].length
                ) + percentage;


            updateDisplay();

        }
    );


/*
|--------------------------------------------------------------------------
| KUADRAT
|--------------------------------------------------------------------------
*/

document
    .getElementById('squareButton')
    .addEventListener(
        'click',
        () => {

            const match =
                expression.match(
                    /(-?\d+(?:\.\d+)?)$/
                );


            if (!match) {
                return;
            }


            const number =
                parseFloat(match[1]);


            const square =
                number * number;


            expression =
                expression.slice(
                    0,
                    -match[1].length
                ) + square;


            updateDisplay();

        }
    );


/*
|--------------------------------------------------------------------------
| AKAR
|--------------------------------------------------------------------------
*/

document
    .getElementById('sqrtButton')
    .addEventListener(
        'click',
        () => {

            const match =
                expression.match(
                    /(-?\d+(?:\.\d+)?)$/
                );


            if (!match) {
                return;
            }


            const number =
                parseFloat(match[1]);


            if (number < 0) {

                alert(
                    'Akar dari angka negatif tidak tersedia.'
                );

                return;
            }


            const root =
                Math.sqrt(number);


            expression =
                expression.slice(
                    0,
                    -match[1].length
                ) + root;


            updateDisplay();

        }
    );


/*
|--------------------------------------------------------------------------
| PLUS MINUS
|--------------------------------------------------------------------------
*/

document
    .getElementById('signButton')
    .addEventListener(
        'click',
        () => {

            const match =
                expression.match(
                    /(\d+(?:\.\d+)?)$/
                );


            if (!match) {
                return;
            }


            const number =
                match[1];


            const start =
                expression.slice(
                    0,
                    -number.length
                );


            expression =
                start +
                (
                    start.endsWith('-')
                    ? number
                    : '-' + number
                );


            updateDisplay();

        }
    );


/*
|--------------------------------------------------------------------------
| ROCKET THEME
|--------------------------------------------------------------------------
*/

function applyRocketTheme(value) {

    /*
    Reset semua tema.
    */

    calculator.classList.remove(
        'theme-negative',
        'theme-small',
        'theme-medium',
        'theme-large',
        'theme-mega'
    );


    /*
    Reset posisi roket.
    */

    rocket.style.bottom =
        '5px';


    rocket.classList.remove(
        'launch'
    );


    /*
    HASIL NEGATIF
    */

    if (value < 0) {

        calculator.classList.add(
            'theme-negative'
        );

        rocketStatus.textContent =
            '🔴 Roket masuk zona negatif';

        resultInfo.textContent =
            'Hasil negatif — roket turun 🚀';

        rocket.style.bottom =
            '0px';

        return;
    }


    /*
    HASIL 0-10
    */

    if (value <= 10) {

        calculator.classList.add(
            'theme-small'
        );

        rocketStatus.textContent =
            '🔵 Launch Level 1';

        resultInfo.textContent =
            'Hasil kecil — roket terbang rendah 🚀';

        rocket.style.bottom =
            '25px';

        return;
    }


    /*
    HASIL 11-100
    */

    if (value <= 100) {

        calculator.classList.add(
            'theme-medium'
        );

        rocketStatus.textContent =
            '🟢 Launch Level 2';

        resultInfo.textContent =
            'Hasil sedang — roket terbang lebih tinggi 🚀';

        rocket.style.bottom =
            '65px';

        rocket.classList.add(
            'launch'
        );

        return;
    }


    /*
    HASIL 101-1000
    */

    if (value <= 1000) {

        calculator.classList.add(
            'theme-large'
        );

        rocketStatus.textContent =
            '🟠 Launch Level 3';

        resultInfo.textContent =
            'Hasil besar — roket meluncur tinggi! 🚀🔥';

        rocket.style.bottom =
            '105px';

        rocket.classList.add(
            'launch'
        );

        return;
    }


    /*
    HASIL DI ATAS 1000
    */

    calculator.classList.add(
        'theme-mega'
    );

    rocketStatus.textContent =
        '🟣 MEGA LAUNCH!!!';

    resultInfo.textContent =
        'HASIL SUPER BESAR — ROKET TERBANG MAKSIMAL! 🚀🔥🚀';

    rocket.style.bottom =
        '145px';

    rocket.classList.add(
        'launch'
    );
}


/*
|--------------------------------------------------------------------------
| RESET ROCKET
|--------------------------------------------------------------------------
*/

function resetRocket() {

    calculator.classList.remove(
        'theme-negative',
        'theme-small',
        'theme-medium',
        'theme-large',
        'theme-mega'
    );


    rocket.style.bottom =
        '5px';


    rocket.classList.remove(
        'launch'
    );


    rocketStatus.textContent =
        '🚀 Siap diluncurkan';


    resultInfo.textContent =
        'Masukkan perhitungan untuk meluncurkan roket 🚀';

}


/*
|--------------------------------------------------------------------------
| HISTORY
|--------------------------------------------------------------------------
*/

function addHistory(
    calculation,
    result
) {

    const item =
        document.createElement('div');


    item.className =
        'history-item';


    item.textContent =
        calculation +
        ' = ' +
        result;


    historyList.prepend(item);


    while (
        historyList.children.length > 5
    ) {

        historyList.lastChild.remove();
    }

}


/*
|--------------------------------------------------------------------------
| HASIL DARI PHP
|--------------------------------------------------------------------------
*/

<?php if ($hasil !== null): ?>

const phpResult =
    <?= json_encode($hasil) ?>;

const oldExpression =
    <?= json_encode($ekspresi) ?>;


/*
|--------------------------------------------------------------------------
| Tampilkan hasil
|--------------------------------------------------------------------------
*/

expression =
    String(phpResult);

justCalculated = true;

previousDisplay.textContent =
    oldExpression
        .replace(/\*/g,'×')
        .replace(/\//g,'÷')
    + ' =';


/*
|--------------------------------------------------------------------------
| Jalankan roket
|--------------------------------------------------------------------------
*/

applyRocketTheme(
    Number(phpResult)
);


/*
|--------------------------------------------------------------------------
| Simpan history
|--------------------------------------------------------------------------
*/

addHistory(
    oldExpression
        .replace(/\*/g,'×')
        .replace(/\//g,'÷'),

    phpResult
);


updateDisplay();

<?php endif; ?>


/*
|--------------------------------------------------------------------------
| SAMA DENGAN
|--------------------------------------------------------------------------
*/

document
    .getElementById('equalButton')
    .addEventListener(
        'click',
        () => {

            if (expression === '') {
                return;
            }


            /*
            Jangan menghitung jika
            expression berakhir operator.
            */

            if (
                /[\+\-\*\/%]$/
                    .test(expression)
            ) {

                return;
            }


            expressionInput.value =
                expression;


            calculatorForm.submit();

        }
    );


/*
|--------------------------------------------------------------------------
| KEYBOARD SUPPORT
|--------------------------------------------------------------------------
*/

document.addEventListener(
    'keydown',
    event => {

        const key =
            event.key;


        /*
        ANGKA
        */

        if (
            /^[0-9.]$/.test(key)
        ) {

            const button =
                document.querySelector(
                    `[data-number="${key}"]`
                );


            if (button) {
                button.click();
            }

            return;
        }


        /*
        OPERATOR
        */

        if (
            ['+','-','*','/'].includes(key)
        ) {

            const button =
                document.querySelector(
                    `[data-operator="${key}"]`
                );


            if (button) {
                button.click();
            }

            return;
        }


        /*
        ENTER
        */

        if (key === 'Enter') {

            event.preventDefault();

            document
                .getElementById('equalButton')
                .click();

            return;
        }


        /*
        BACKSPACE
        */

        if (key === 'Backspace') {

            document
                .getElementById('deleteButton')
                .click();

            return;
        }


        /*
        ESCAPE
        */

        if (key === 'Escape') {

            document
                .getElementById('clearButton')
                .click();
        }

    }
);


/*
|--------------------------------------------------------------------------
| INITIAL DISPLAY
|--------------------------------------------------------------------------
*/

updateDisplay();

</script>


</body>

</html>
```
