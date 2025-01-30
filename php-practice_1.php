<?php
// Q1 変数と文字列
$name = "「八島」";
$message = "私の名前は" . $name . "です。";
echo $message;

// $message = "私の名前は{$name}です"

// Q2 四則演算
$num = 5 * 4;
$numb = $num / 2;
echo "$num\n$numb";

// Q3 日付操作
$timestamp = strtotime("2019-05-23 14:48:22");
echo "現時刻は、" . date("Y年m月d日 H時i分s秒", $timestamp) . "です。";

// var_dumpする（宿題）


// Q4 条件分岐-1 if文
$device = 'mac';
// bool
if ($device == 'mac' || 'windows') {
    $message = "使用OSは、{$device}です。";
} else  {
    $message = "どちらでもありません。";
}

echo $message;

// Q5 条件分岐-2 三項演算子
$age = 15;
$message = ($age > 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$pref = ['東京都', '神奈川県', '茨城県', '栃木県', '千葉県'];
echo $pref[3]. "と" . $pref[4] . "は関東地方の都道府県です。"

// Q7 連想配列-1
$region = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($region as $key => $value) {
echo "$value\n";
}

// Q8 連想配列-2
$region = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($region as $pref => $cap) {
    //  break;
    if ($pref == '埼玉県') {
        //  break;
        // echo "saitama";
        echo "{$pref}の県庁所在地は、{$cap}です。";
        break;
    }
    //  break;
}

// Q9 連想配列-3
$region = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '石川県' => '金沢市',
    '宮城県' => '仙台市'
  ];
  
$kanto = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
      ];
  
  foreach ($region as $pref => $cap) {
      if (in_array($pref, $kanto)) {
          echo "{$pref}の県庁所在地は、{$cap}です。\n";
   }
   else {
       echo "{$pref}は関東地方ではありません。\n";
   }
}

// Q10 関数-1
function hello($name) {
    return "{$name}さん、こんにちは。\n";
}

echo hello("金谷") ;
echo hello("安藤") ;

// Q11 関数-2
function calcTaxInPrice($price) {
  $taxinprice = $price * 1.1;
  return($taxinprice);
}

  $price = 1000;
  $taxinprice = calcTaxInPrice($price);

echo "{$taxinprice}円の商品の税込価格は{$price}円です。"

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 == 0) {
        return "{$num}は奇数です。";
    } else {
        return "{$num}は偶数です。";
    }
}

echo distinguishNum(11);
echo "\n";
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case "A":
        case "B":
            return "合格です。";
            
        case "C":
            return "合格ですが追加課題があります。";
            
        case "D":
            return "不合格です。";
            
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade("A");
echo "\n";
echo evaluateGrade("E");
?>