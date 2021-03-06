# dutch47
This CiviCRM extension  works around the translation issues of CiviCRM 4.7 for Dutch CiviCRM instances.

## Why we created this extension.

We had several translation issues after upgrading our localized Dutch
CiviCRM 4.6-instance to CiviCRM 4.7. One of them was that CiviCRM 4.7 was not 
completely translated, and there is
[no easy way to fix this](https://civicrm.stackexchange.com/questions/10108/how-to-fix-translations-in-civicrm-4-7).
Another issue seems to be that the option values for 'relative_date_filters'
seem to be untranslated. There might be more translation problems, but they
will come to light soon enough :-)

The best solution is probably 
[fixing the transifex issues](https://issues.civicrm.org/jira/browse/CRM-17737),
but this is all new to me, and I don't have plenty of free time ATM. So for the
time being, I created this ugly extension that just makes sure that the Dutch
translation of CiviCRM is OK.

I hope that it will soon be obsolete :-)

## How it works

(I assume your CiviCRM instance has only one domain, and you already changed the
CiviCRM language to Dutch.)

The core of this extension is in it's enable and disable hooks, they are
defined in [Upgrader.php](CRM/Dutch47/Upgrader.php). Basically the
enable hook adds some word replacements, and changes the labels of
untranslated option values. The disable hook reverts the changes.

## New versions

If you install a new version of this extension, just disable it and enable
it again.

## How to help?

If you can, please help fixing 
[CRM-17737](https://issues.civicrm.org/jira/browse/CRM-17737).
But if you cannot do that, I welcome pull requests.
