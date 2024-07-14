#!/bin/bash

# ルートディレクトリのパスを保存
ROOT_DIR=$(pwd)

# _No.1_.htmlに対する回答を実行
echo -e "< _No.1_.html に対する実行例>\n"
cd $ROOT_DIR//Answers/AnswerNo1
php answer1.php < input1.in
php answer1.php < input2.in
php answer1.php < input3.in
php answer1.php < input4.in
php answer1.php < input5.in

# _No.2_.htmlに対する回答を実行
echo -e "-----------------------------------------------\n"
echo -e "< _No.2_.html に対する実行例>\n"
cd $ROOT_DIR//Answers/AnswerNo2
php answer2.php < input1.in
php answer2.php < input2.in
php answer2.php < input3.in
php answer2.php < input4.in
php answer2.php < input5.in

# _No.3_.htmlに対する回答を実行
echo -e "-----------------------------------------------\n"
echo -e "< _No.3_.html に対する実行例>\n"
cd $ROOT_DIR//Answers/AnswerNo3
php answer3.php < input1.in
php answer3.php < input2.in
php answer3.php < input3.in
php answer3.php < input4.in
php answer3.php < input5.in
