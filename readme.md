# Clone Udemy using Codeigniter 3


#### 1. Initial commit - Install Ci3

        new file:   .editorconfig
        new file:   .gitignore
        new file:   application/.htaccess
        new file:   application/cache/index.html
        new file:   application/config/autoload.php
        new file:   application/config/config.php
        new file:   application/config/constants.php
        new file:   application/config/database.php
        new file:   application/config/doctypes.php
        new file:   application/config/foreign_chars.php
        new file:   application/config/hooks.php
        new file:   application/config/index.html
        new file:   application/config/memcached.php
        new file:   application/config/migration.php
        new file:   application/config/mimes.php
        new file:   application/config/profiler.php
        new file:   application/config/routes.php
        new file:   application/config/smileys.php
        new file:   application/config/user_agents.php
        new file:   application/controllers/Welcome.php
        new file:   application/controllers/index.html
        new file:   application/core/index.html
        new file:   application/helpers/index.html
        new file:   application/hooks/index.html
        new file:   application/index.html
        new file:   application/language/english/index.html
        new file:   application/language/index.html
        new file:   application/libraries/index.html
        new file:   application/logs/index.html
        new file:   application/models/index.html
        new file:   application/third_party/index.html
        new file:   application/views/errors/cli/error_404.php
        new file:   application/views/errors/cli/error_db.php
        new file:   application/views/errors/cli/error_exception.php
        new file:   application/views/errors/cli/error_general.php
        new file:   application/views/errors/cli/error_php.php
        new file:   application/views/errors/cli/index.html
        new file:   application/views/errors/html/error_404.php
        new file:   application/views/errors/html/error_db.php
        new file:   application/views/errors/html/error_exception.php
        new file:   application/views/errors/html/error_general.php
        new file:   application/views/errors/html/error_php.php
        new file:   application/views/errors/html/index.html
        new file:   application/views/errors/index.html
        new file:   application/views/index.html
        new file:   application/views/welcome_message.php
        new file:   composer.json
        new file:   index.php
        new file:   license.txt
        new file:   readme.rst
        new file:   system/.htaccess
        new file:   system/core/Benchmark.php
        new file:   system/core/CodeIgniter.php
        new file:   system/core/Common.php
        new file:   system/core/Config.php
        new file:   system/core/Controller.php
        new file:   system/core/Exceptions.php
        new file:   system/core/Hooks.php
        new file:   system/core/Input.php
        new file:   system/core/Lang.php
        new file:   system/core/Loader.php
        new file:   system/core/Log.php
        new file:   system/core/Model.php
        new file:   system/core/Output.php
        new file:   system/core/Router.php
        new file:   system/core/Security.php
        new file:   system/core/URI.php
        new file:   system/core/Utf8.php
        new file:   system/core/compat/hash.php
        new file:   system/core/compat/index.html
        new file:   system/core/compat/mbstring.php
        new file:   system/core/compat/password.php
        new file:   system/core/compat/standard.php
        new file:   system/core/index.html
        new file:   system/database/DB.php
        new file:   system/database/DB_cache.php
        new file:   system/database/DB_driver.php
        new file:   system/database/DB_forge.php
        new file:   system/database/DB_query_builder.php
        new file:   system/database/DB_result.php
        new file:   system/database/DB_utility.php
        new file:   system/database/drivers/cubrid/cubrid_driver.php
        new file:   system/database/drivers/cubrid/cubrid_forge.php
        new file:   system/database/drivers/cubrid/cubrid_result.php
        new file:   system/database/drivers/cubrid/cubrid_utility.php
        new file:   system/database/drivers/cubrid/index.html
        new file:   system/database/drivers/ibase/ibase_driver.php
        new file:   system/database/drivers/ibase/ibase_forge.php
        new file:   system/database/drivers/ibase/ibase_result.php
        new file:   system/database/drivers/ibase/ibase_utility.php
        new file:   system/database/drivers/ibase/index.html
        new file:   system/database/drivers/index.html
        new file:   system/database/drivers/mssql/index.html
        new file:   system/database/drivers/mssql/mssql_driver.php
        new file:   system/database/drivers/mssql/mssql_forge.php
        new file:   system/database/drivers/mssql/mssql_result.php
        new file:   system/database/drivers/mssql/mssql_utility.php
        new file:   system/database/drivers/mysql/index.html
        new file:   system/database/drivers/mysql/mysql_driver.php
        new file:   system/database/drivers/mysql/mysql_forge.php
        new file:   system/database/drivers/mysql/mysql_result.php
        new file:   system/database/drivers/mysql/mysql_utility.php
        new file:   system/database/drivers/mysqli/index.html
        new file:   system/database/drivers/mysqli/mysqli_driver.php
        new file:   system/database/drivers/mysqli/mysqli_forge.php
        new file:   system/database/drivers/mysqli/mysqli_result.php
        new file:   system/database/drivers/mysqli/mysqli_utility.php
        new file:   system/database/drivers/oci8/index.html
        new file:   system/database/drivers/oci8/oci8_driver.php
        new file:   system/database/drivers/oci8/oci8_forge.php
        new file:   system/database/drivers/oci8/oci8_result.php
        new file:   system/database/drivers/oci8/oci8_utility.php
        new file:   system/database/drivers/odbc/index.html
        new file:   system/database/drivers/odbc/odbc_driver.php
        new file:   system/database/drivers/odbc/odbc_forge.php
        new file:   system/database/drivers/odbc/odbc_result.php
        new file:   system/database/drivers/odbc/odbc_utility.php
        new file:   system/database/drivers/pdo/index.html
        new file:   system/database/drivers/pdo/pdo_driver.php
        new file:   system/database/drivers/pdo/pdo_forge.php
        new file:   system/database/drivers/pdo/pdo_result.php
        new file:   system/database/drivers/pdo/pdo_utility.php
        new file:   system/database/drivers/pdo/subdrivers/index.html
        new file:   system/database/drivers/pdo/subdrivers/pdo_4d_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_4d_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_cubrid_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_cubrid_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_dblib_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_dblib_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_firebird_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_firebird_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_ibm_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_ibm_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_informix_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_informix_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_mysql_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_mysql_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_oci_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_oci_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_odbc_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_odbc_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_pgsql_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_pgsql_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_sqlite_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_sqlite_forge.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_sqlsrv_driver.php
        new file:   system/database/drivers/pdo/subdrivers/pdo_sqlsrv_forge.php
        new file:   system/database/drivers/postgre/index.html
        new file:   system/database/drivers/postgre/postgre_driver.php
        new file:   system/database/drivers/postgre/postgre_forge.php
        new file:   system/database/drivers/postgre/postgre_result.php
        new file:   system/database/drivers/postgre/postgre_utility.php
        new file:   system/database/drivers/sqlite/index.html
        new file:   system/database/drivers/sqlite/sqlite_driver.php
        new file:   system/database/drivers/sqlite/sqlite_forge.php
        new file:   system/database/drivers/sqlite/sqlite_result.php
        new file:   system/database/drivers/sqlite/sqlite_utility.php
        new file:   system/database/drivers/sqlite3/index.html
        new file:   system/database/drivers/sqlite3/sqlite3_driver.php
        new file:   system/database/drivers/sqlite3/sqlite3_forge.php
        new file:   system/database/drivers/sqlite3/sqlite3_result.php
        new file:   system/database/drivers/sqlite3/sqlite3_utility.php
        new file:   system/database/drivers/sqlsrv/index.html
        new file:   system/database/drivers/sqlsrv/sqlsrv_driver.php
        new file:   system/database/drivers/sqlsrv/sqlsrv_forge.php
        new file:   system/database/drivers/sqlsrv/sqlsrv_result.php
        new file:   system/database/drivers/sqlsrv/sqlsrv_utility.php
        new file:   system/database/index.html
        new file:   system/fonts/index.html
        new file:   system/fonts/texb.ttf
        new file:   system/helpers/array_helper.php
        new file:   system/helpers/captcha_helper.php
        new file:   system/helpers/cookie_helper.php
        new file:   system/helpers/date_helper.php
        new file:   system/helpers/directory_helper.php
        new file:   system/helpers/download_helper.php
        new file:   system/helpers/email_helper.php
        new file:   system/helpers/file_helper.php
        new file:   system/helpers/form_helper.php
        new file:   system/helpers/html_helper.php
        new file:   system/helpers/index.html
        new file:   system/helpers/inflector_helper.php
        new file:   system/helpers/language_helper.php
        new file:   system/helpers/number_helper.php
        new file:   system/helpers/path_helper.php
        new file:   system/helpers/security_helper.php
        new file:   system/helpers/smiley_helper.php
        new file:   system/helpers/string_helper.php
        new file:   system/helpers/text_helper.php
        new file:   system/helpers/typography_helper.php
        new file:   system/helpers/url_helper.php
        new file:   system/helpers/xml_helper.php
        new file:   system/index.html
        new file:   system/language/english/calendar_lang.php
        new file:   system/language/english/date_lang.php
        new file:   system/language/english/db_lang.php
        new file:   system/language/english/email_lang.php
        new file:   system/language/english/form_validation_lang.php
        new file:   system/language/english/ftp_lang.php
        new file:   system/language/english/imglib_lang.php
        new file:   system/language/english/index.html
        new file:   system/language/english/migration_lang.php
        new file:   system/language/english/number_lang.php
        new file:   system/language/english/pagination_lang.php
        new file:   system/language/english/profiler_lang.php
        new file:   system/language/english/unit_test_lang.php
        new file:   system/language/english/upload_lang.php
        new file:   system/language/index.html
        new file:   system/libraries/Cache/Cache.php
        new file:   system/libraries/Cache/drivers/Cache_apc.php
        new file:   system/libraries/Cache/drivers/Cache_dummy.php
        new file:   system/libraries/Cache/drivers/Cache_file.php
        new file:   system/libraries/Cache/drivers/Cache_memcached.php
        new file:   system/libraries/Cache/drivers/Cache_redis.php
        new file:   system/libraries/Cache/drivers/Cache_wincache.php
        new file:   system/libraries/Cache/drivers/index.html
        new file:   system/libraries/Cache/index.html
        new file:   system/libraries/Calendar.php
        new file:   system/libraries/Cart.php
        new file:   system/libraries/Driver.php
        new file:   system/libraries/Email.php
        new file:   system/libraries/Encrypt.php
        new file:   system/libraries/Encryption.php
        new file:   system/libraries/Form_validation.php
        new file:   system/libraries/Ftp.php
        new file:   system/libraries/Image_lib.php
        new file:   system/libraries/Javascript.php
        new file:   system/libraries/Javascript/Jquery.php
        new file:   system/libraries/Javascript/index.html
        new file:   system/libraries/Migration.php
        new file:   system/libraries/Pagination.php
        new file:   system/libraries/Parser.php
        new file:   system/libraries/Profiler.php
        new file:   system/libraries/Session/CI_Session_driver_interface.php
        new file:   system/libraries/Session/OldSessionWrapper.php
        new file:   system/libraries/Session/PHP8SessionWrapper.php
        new file:   system/libraries/Session/Session.php
        new file:   system/libraries/Session/SessionHandlerInterface.php
        new file:   system/libraries/Session/SessionUpdateTimestampHandlerInterface.php
        new file:   system/libraries/Session/Session_driver.php
        new file:   system/libraries/Session/drivers/Session_database_driver.php
        new file:   system/libraries/Session/drivers/Session_files_driver.php
        new file:   system/libraries/Session/drivers/Session_memcached_driver.php
        new file:   system/libraries/Session/drivers/Session_redis_driver.php
        new file:   system/libraries/Session/drivers/index.html
        new file:   system/libraries/Session/index.html
        new file:   system/libraries/Table.php
        new file:   system/libraries/Trackback.php
        new file:   system/libraries/Typography.php
        new file:   system/libraries/Unit_test.php
        new file:   system/libraries/Upload.php
        new file:   system/libraries/User_agent.php
        new file:   system/libraries/Xmlrpc.php
        new file:   system/libraries/Xmlrpcs.php
        new file:   system/libraries/Zip.php
        new file:   system/libraries/index.html

#### 2. Setup admin dashboard, add and load assets

        modified:   .gitignore
        modified:   application/controllers/Welcome.php
        new file:   application/views/admin/index.php
        new file:   readme.md

#### 3. Use url helper to load assets

        modified:   application/config/autoload.php
        modified:   application/views/admin/index.php

        Example: <?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css"

#### 4. Create database and 20 tables

        modified:   .gitignore
        modified:   readme.md

#### 5. Connecting database with the app

        modified:   application/config/database.php
        modified:   readme.md

#### 6. Add some parameters to $autoload['libraries']

        modified:   application/config/autoload.php
        modified:   readme.md
        modified:   readme.md

#### 7. Create Auth controller and set parameters in autoload

        modified:   application/config/autoload.php
        new file:   application/controllers/Auth.php
        modified:   readme.md

#### 8. Load the db and session from Auth controller

        modified:   application/controllers/Auth.php
        modified:   readme.md

#### 9. Create and load login page from Auth controller and added optimum asset

        modified:   .gitignore
        modified:   application/config/routes.php
        modified:   application/controllers/Auth.php
        modified:   application/controllers/Welcome.php
        new file:   application/views/back/account/login.php
        renamed:    application/views/admin/index.php -> application/views/back/admin/index.php
        modified:   readme.md

#### 10. Set up some parameter in $autoload['helper']

        modified:   application/config/autoload.php
        modified:   readme.md

        NOTE: 

        For example, in oder to use form, we have to add form parameter in $autoload['helper']

#### 11. Insert, load and fetch data from settings table to login page

        modified:   application/config/autoload.php
        modified:   application/views/back/account/login.php
        modified:   readme.md

        NOTE:

        The codes to display data is too long.
        Next: there should be a way to shorten it. Use helpers to solve it.

