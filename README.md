# コーディングテスト

実施日　 2024/7/14

言語　 php

## 問題

- _No.1_.html
- _No.2_.html
- _No.3_.html

## 回答ファイル

- [answer1.php](https://github.com/shogoisaji/coding_test_e/blob/main/Answers/AnswerNo1/answer1.php)
- [answer2.php](https://github.com/shogoisaji/coding_test_e/blob/main/Answers/AnswerNo2/answer2.php)
- [answer3.php](https://github.com/shogoisaji/coding_test_e/blob/main/Answers/AnswerNo3/answer3.php)

## 回答の実行

shell script へ権限の付与

```
chmod +x run_answers.sh
```

すべての回答を実行

```
./run_answers.sh
```

## 実行結果画像

<img width="284" alt="result" src="https://github.com/user-attachments/assets/e586e4e9-c3ff-4b5a-8cdf-abe7a13cb756">

## テスト

### phpunit のインストール

```
composer install
```

### phpunit の実行

- [DiceCalculatorTest.php](https://github.com/shogoisaji/coding_test_e/blob/main/Tests/Answers/AnsowerNo1/DiceCalculatorTest.php)
- [PlacementStonesTest.php](https://github.com/shogoisaji/coding_test_e/blob/main/Tests/Answers/AnsowerNo2/PlacementStonesTest.php)
- [CalculationMinimumTest.php](https://github.com/shogoisaji/coding_test_e/blob/main/Tests/Answers/AnsowerNo3/CalculationMinimumTest.php)

```
./vendor/bin/phpunit Tests
```

### テスト結果画像

<img width="449" alt="test_result" src="https://github.com/user-attachments/assets/0c2aa5ab-b951-409f-a834-8f8d5a513bb1">
