# webmozart-assert-issue-229

To run:

```bash
➜ make psalm                     
docker run --rm -v /srv/work/php/github.com/zerkms/webmozart-assert-issue-229:/app -w /app composer:2 composer install
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Nothing to install, update or remove
Generating autoload files
composer/package-versions-deprecated: Generating version class...
composer/package-versions-deprecated: ...done generating version class
14 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
docker run --rm -v /srv/work/php/github.com/zerkms/webmozart-assert-issue-229:/app -w /app composer:2 ./vendor/bin/psalm
Scanning files...
Analyzing files...

░░
------------------------------
No errors found!
------------------------------

Checks took 0.67 seconds and used 66.233MB of memory
Psalm was able to infer types for 100% of the codebase
```
