# Introduction to Laravel

##Aktualna uloha:

    1. zistit kolko clankov vlastni konkretny uzivatel
        1.1 v modely User (app/User.php) vytvorit metodu numberOfArticles(), ktora vrati pocet vlastnenych clankov
        1.2 vyuzite uz existujuca metodu Articles()
        1.3 inspirujte sa metodou isOwner() v Articles modely
    2. vytvorit Middleware, ktory uzivatelovi nepovoli vytvorit dalsi clanok
        2.1 v takom pripade presmerujte uzivatela naspat a oznamte mu zamietnutie pristupu k vytvaraniu dalsich clankov
        2.2 postupujte podla dokumentacie
            2.2.1 vytrovenie Middleware pomocou php artisan command
            2.2.2 registracia Middleware v app/kernel.php
            2.2.3 nasadenie Middleware v konstruktore Controller-u (inspirujte sa v ArticlesController)
    3. zaslanie e-mailu autorovi clanku so znenim:
        3.1 "Vas clanok bol uspesne vytvoreny. Pozriet a zdielat ho mozte na tejto adrese."
        3.2 "tejto adrese" bude odkaz na clanok
        3.3 inspirujte sa na tomto linku (zatial nevyuzivajte MailGun, ale Gmail account)
        3.4 znenie e-mailu vytvorte v resources/views/emails/article-creation.blade.php
