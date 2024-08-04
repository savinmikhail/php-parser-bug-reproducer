### PHP Parser bug reproducer repo

1. Run the app. For me it is
```bash
/opt/homebrew/Cellar/php/8.3.7/bin/php /Users/mikhailsavin/projects/php-parser-bug-reproducer/src/Analyzer.php
```

2. See
```bash
"Exception"
```

3. I want to see FQN here, so it should be
```bash
"PHPUnit\Logging\Exception"
```

