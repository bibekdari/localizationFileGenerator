# Localization file generator
I have used SimpleXLSX class 0.8.12 (Official) to parse xlsx file.
Read more about it in [here](https://github.com/shuchkin/simplexls)  

**Bibek Sharma Timalsina**

*Hey, guys, please ★ the package for my motivation :)* 

## Usage
1. Just install apache. (You can use [xampp](https://www.apachefriends.org/download.html) or mamp or wamp).
2. Run apache server
3. Clone this repo in htdocs folder.
4. Change the content of provided excel.xlsx file according to your requirement
5. Use url like: http://localhost/xlsx/excel.php?platform=android&lang=japanese
6. Copy paste the content produced in your string files.

**NOTE**
1. You can add languages in xlsx file, just make sure the value in "lang" you provide in url is same as you add in xlsx file's first row.
2. Platforms are "ios" and "android"

## Examples
### iOS
eg. http://localhost/xlsx/excel.php?platform=ios&lang=japanese
following is the sample output:
```
"select_language" = "言語選択";
"select_nationality" = "国籍選び";
"about_plan" = "プランの違いについて";
"toc" = "利用規約について";
"free_plan" = "フリープラン";
"use_without_registration" = "全員登録無して利用する";
"normal_plan" = "ノーマルプラン";
"user_with_registration" = "全員登録をして利用する";
"login" = "ログイン";
"already_signup" = "すでにアカウントをお持ちの方";
"search" = "検索";
"next" = "次へ";
"normal_plan_registration" = "ノーマルプラン登録";
"icon" = "アイコン";
"username" = "ユーザーネーム";
"mail" = "メールアドレス";
"signup" = "ノーマルプランに登録する";
"back" = "もどる";
```
### Android
eg. http://localhost/xlsx/excel.php?platform=android&lang=japanese
Following is the sample output
```
<resources>
<string name="KEYS">japanese</string>
<string name="select_language">言語選択</string>
<string name="select_nationality">国籍選び</string>
<string name="about_plan">プランの違いについて</string>
<string name="toc">利用規約について</string>
<string name="free_plan">フリープラン</string>
<string name="use_without_registration">全員登録無して利用する</string>
<string name="normal_plan">ノーマルプラン</string>
<string name="user_with_registration">全員登録をして利用する</string>
<string name="login">ログイン</string>
<string name="already_signup">すでにアカウントをお持ちの方</string>
<string name="search">検索</string>
<string name="next">次へ</string>
<string name="normal_plan_registration">ノーマルプラン登録</string>
<string name="icon">アイコン</string>
<string name="username">ユーザーネーム</string>
<string name="mail">メールアドレス</string>
<string name="signup">ノーマルプランに登録する</string>
<string name="back">もどる</string>
</resources>
```
