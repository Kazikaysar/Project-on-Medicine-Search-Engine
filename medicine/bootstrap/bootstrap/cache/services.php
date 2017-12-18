<?php return array (
  'providers' => 
  array (
    0 => 'Intervention\\Image\\ImageServiceProvider',
    1 => 'Collective\\Html\\HtmlServiceProvider',
    2 => 'Illuminate\\Auth\\AuthServiceProvider',
    3 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    4 => 'Illuminate\\Bus\\BusServiceProvider',
    5 => 'Illuminate\\Cache\\CacheServiceProvider',
    6 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    7 => 'Illuminate\\Cookie\\CookieServiceProvider',
    8 => 'Illuminate\\Database\\DatabaseServiceProvider',
    9 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    10 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    11 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    12 => 'Illuminate\\Hashing\\HashServiceProvider',
    13 => 'Illuminate\\Mail\\MailServiceProvider',
    14 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    15 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    16 => 'Illuminate\\Queue\\QueueServiceProvider',
    17 => 'Illuminate\\Redis\\RedisServiceProvider',
    18 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    19 => 'Illuminate\\Session\\SessionServiceProvider',
    20 => 'Illuminate\\Translation\\TranslationServiceProvider',
    21 => 'Illuminate\\Validation\\ValidationServiceProvider',
    22 => 'Illuminate\\View\\ViewServiceProvider',
    23 => 'App\\Providers\\AppServiceProvider',
    24 => 'App\\Providers\\AuthServiceProvider',
    25 => 'App\\Providers\\EventServiceProvider',
    26 => 'App\\Providers\\RouteServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Intervention\\Image\\ImageServiceProvider',
    1 => 'Illuminate\\Auth\\AuthServiceProvider',
    2 => 'Illuminate\\Cookie\\CookieServiceProvider',
    3 => 'Illuminate\\Database\\DatabaseServiceProvider',
    4 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    5 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    6 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    8 => 'Illuminate\\Session\\SessionServiceProvider',
    9 => 'Illuminate\\View\\ViewServiceProvider',
    10 => 'App\\Providers\\AppServiceProvider',
    11 => 'App\\Providers\\AuthServiceProvider',
    12 => 'App\\Providers\\EventServiceProvider',
    13 => 'App\\Providers\\RouteServiceProvider',
  ),
  'deferred' => 
  array (
    'html' => 'Collective\\Html\\HtmlServiceProvider',
    'form' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\HtmlBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\FormBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'Illuminate\\Broadcasting\\BroadcastManager' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Factory' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Contracts\\Broadcasting\\Broadcaster' => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'command.cache.clear' => 'Illuminate\\Cache\\CacheServiceProvider',
    'command.clear-compiled' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.auth.resets.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.down' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.environment' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.key.generate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.optimize' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.list' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.tinker' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.up' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.view.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.app.name' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.auth.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.cache.table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.console.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.controller.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.generate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.event.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.job.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.listener.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.middleware.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.model.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.policy.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.provider.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed-table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.request.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seeder.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.session.table' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.serve' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.test.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.vendor.publish' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleRunCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migrator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.repository' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.rollback' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.reset' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.refresh' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.install' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.status' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.creator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'seeder' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'composer' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.retry' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.forget' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.flush' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
    'mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.transport' => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.work' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.listen' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.restart' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'auth.password' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'auth.password.broker' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'translator' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'translation.loader' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
  ),
  'when' => 
  array (
    'Collective\\Html\\HtmlServiceProvider' => 
    array (
    ),
    'Illuminate\\Broadcasting\\BroadcastServiceProvider' => 
    array (
    ),
    'Illuminate\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider' => 
    array (
    ),
    'Illuminate\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Illuminate\\Mail\\MailServiceProvider' => 
    array (
    ),
    'Illuminate\\Pipeline\\PipelineServiceProvider' => 
    array (
    ),
    'Illuminate\\Queue\\QueueServiceProvider' => 
    array (
    ),
    'Illuminate\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider' => 
    array (
    ),
    'Illuminate\\Translation\\TranslationServiceProvider' => 
    array (
    ),
    'Illuminate\\Validation\\ValidationServiceProvider' => 
    array (
    ),
  ),
);