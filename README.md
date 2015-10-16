Up to date informations about localization
===================
http://forum.ets2mp.com/index.php?/topic/132-localization-of-homepage/

ETS2MP Localization
===================

ETS2MP php files that contains translations to many languages. You can contribute your own language.

When my localization will be added to website?
===================
As soon as possible - I don't have time to check github every minute and update all localizations real time.

How to translate?
===================

1. Create a new branch and check it out
2. Copy the ```en``` folder to your ISO 639-1 shortcode (eg. Polish is pl, Norwegian Bokmål is nb, English is en, etc. these can be found on eg. wikipedia in the infobox on the side)
3. Translate all messages to your langauge keep this format:
```
'key' => 'message',
```

Sometimes you will encounter something like this:
```
'ban_too_new' => 'Please wait until :date UTC to create an appeal.',
```
In this case you should translate everything except ```:date``` this is a special keyword.

Other times you might encounter
```
'registration_body' => array(
    'pre_link'      => 'Already signed up? Click ',
    'link'          => 'Sign in',
    'post_link'     => 'to login to your account.',
),
```
this is used when there's a link in a sentence, you should only change the message in the pre_link, link and post_link parts, these appears before, inside and after the link.

Remember: Do not change key. Change only "message".

If you have more questions feel free to ask send them to me:

Have fun.
