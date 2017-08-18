<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Opis\\Closure\\Analyzer' => $vendorDir . '/opis/closure/lib/Analyzer.php',
    'Opis\\Closure\\ClosureContext' => $vendorDir . '/opis/closure/lib/ClosureContext.php',
    'Opis\\Closure\\ClosureScope' => $vendorDir . '/opis/closure/lib/ClosureScope.php',
    'Opis\\Closure\\ClosureStream' => $vendorDir . '/opis/closure/lib/ClosureStream.php',
    'Opis\\Closure\\DefaultSecurityProvider' => $vendorDir . '/opis/closure/lib/DefaultSecurityProvider.php',
    'Opis\\Closure\\ReflectionClosure' => $vendorDir . '/opis/closure/lib/ReflectionClosure.php',
    'Opis\\Closure\\SecureClosure' => $vendorDir . '/opis/closure/lib/SecureClosure.php',
    'Opis\\Closure\\SecurityException' => $vendorDir . '/opis/closure/lib/SecurityException.php',
    'Opis\\Closure\\SecurityProviderInterface' => $vendorDir . '/opis/closure/lib/SecurityProviderInterface.php',
    'Opis\\Closure\\SelfReference' => $vendorDir . '/opis/closure/lib/SelfReference.php',
    'Opis\\Closure\\SerializableClosure' => $vendorDir . '/opis/closure/lib/SerializableClosure.php',
    'Pheanstalk\\Command' => $vendorDir . '/pda/pheanstalk/src/Command.php',
    'Pheanstalk\\Command\\AbstractCommand' => $vendorDir . '/pda/pheanstalk/src/Command/AbstractCommand.php',
    'Pheanstalk\\Command\\BuryCommand' => $vendorDir . '/pda/pheanstalk/src/Command/BuryCommand.php',
    'Pheanstalk\\Command\\DeleteCommand' => $vendorDir . '/pda/pheanstalk/src/Command/DeleteCommand.php',
    'Pheanstalk\\Command\\IgnoreCommand' => $vendorDir . '/pda/pheanstalk/src/Command/IgnoreCommand.php',
    'Pheanstalk\\Command\\KickCommand' => $vendorDir . '/pda/pheanstalk/src/Command/KickCommand.php',
    'Pheanstalk\\Command\\KickJobCommand' => $vendorDir . '/pda/pheanstalk/src/Command/KickJobCommand.php',
    'Pheanstalk\\Command\\ListTubeUsedCommand' => $vendorDir . '/pda/pheanstalk/src/Command/ListTubeUsedCommand.php',
    'Pheanstalk\\Command\\ListTubesCommand' => $vendorDir . '/pda/pheanstalk/src/Command/ListTubesCommand.php',
    'Pheanstalk\\Command\\ListTubesWatchedCommand' => $vendorDir . '/pda/pheanstalk/src/Command/ListTubesWatchedCommand.php',
    'Pheanstalk\\Command\\PauseTubeCommand' => $vendorDir . '/pda/pheanstalk/src/Command/PauseTubeCommand.php',
    'Pheanstalk\\Command\\PeekCommand' => $vendorDir . '/pda/pheanstalk/src/Command/PeekCommand.php',
    'Pheanstalk\\Command\\PutCommand' => $vendorDir . '/pda/pheanstalk/src/Command/PutCommand.php',
    'Pheanstalk\\Command\\ReleaseCommand' => $vendorDir . '/pda/pheanstalk/src/Command/ReleaseCommand.php',
    'Pheanstalk\\Command\\ReserveCommand' => $vendorDir . '/pda/pheanstalk/src/Command/ReserveCommand.php',
    'Pheanstalk\\Command\\StatsCommand' => $vendorDir . '/pda/pheanstalk/src/Command/StatsCommand.php',
    'Pheanstalk\\Command\\StatsJobCommand' => $vendorDir . '/pda/pheanstalk/src/Command/StatsJobCommand.php',
    'Pheanstalk\\Command\\StatsTubeCommand' => $vendorDir . '/pda/pheanstalk/src/Command/StatsTubeCommand.php',
    'Pheanstalk\\Command\\TouchCommand' => $vendorDir . '/pda/pheanstalk/src/Command/TouchCommand.php',
    'Pheanstalk\\Command\\UseCommand' => $vendorDir . '/pda/pheanstalk/src/Command/UseCommand.php',
    'Pheanstalk\\Command\\WatchCommand' => $vendorDir . '/pda/pheanstalk/src/Command/WatchCommand.php',
    'Pheanstalk\\Connection' => $vendorDir . '/pda/pheanstalk/src/Connection.php',
    'Pheanstalk\\Exception' => $vendorDir . '/pda/pheanstalk/src/Exception.php',
    'Pheanstalk\\Exception\\ClientException' => $vendorDir . '/pda/pheanstalk/src/Exception/ClientException.php',
    'Pheanstalk\\Exception\\CommandException' => $vendorDir . '/pda/pheanstalk/src/Exception/CommandException.php',
    'Pheanstalk\\Exception\\ConnectionException' => $vendorDir . '/pda/pheanstalk/src/Exception/ConnectionException.php',
    'Pheanstalk\\Exception\\ServerBadFormatException' => $vendorDir . '/pda/pheanstalk/src/Exception/ServerBadFormatException.php',
    'Pheanstalk\\Exception\\ServerDrainingException' => $vendorDir . '/pda/pheanstalk/src/Exception/ServerDrainingException.php',
    'Pheanstalk\\Exception\\ServerException' => $vendorDir . '/pda/pheanstalk/src/Exception/ServerException.php',
    'Pheanstalk\\Exception\\ServerInternalErrorException' => $vendorDir . '/pda/pheanstalk/src/Exception/ServerInternalErrorException.php',
    'Pheanstalk\\Exception\\ServerOutOfMemoryException' => $vendorDir . '/pda/pheanstalk/src/Exception/ServerOutOfMemoryException.php',
    'Pheanstalk\\Exception\\ServerUnknownCommandException' => $vendorDir . '/pda/pheanstalk/src/Exception/ServerUnknownCommandException.php',
    'Pheanstalk\\Exception\\SocketException' => $vendorDir . '/pda/pheanstalk/src/Exception/SocketException.php',
    'Pheanstalk\\Job' => $vendorDir . '/pda/pheanstalk/src/Job.php',
    'Pheanstalk\\Pheanstalk' => $vendorDir . '/pda/pheanstalk/src/Pheanstalk.php',
    'Pheanstalk\\PheanstalkInterface' => $vendorDir . '/pda/pheanstalk/src/PheanstalkInterface.php',
    'Pheanstalk\\Response' => $vendorDir . '/pda/pheanstalk/src/Response.php',
    'Pheanstalk\\ResponseParser' => $vendorDir . '/pda/pheanstalk/src/ResponseParser.php',
    'Pheanstalk\\Response\\ArrayResponse' => $vendorDir . '/pda/pheanstalk/src/Response/ArrayResponse.php',
    'Pheanstalk\\Socket' => $vendorDir . '/pda/pheanstalk/src/Socket.php',
    'Pheanstalk\\Socket\\NativeSocket' => $vendorDir . '/pda/pheanstalk/src/Socket/NativeSocket.php',
    'Pheanstalk\\Socket\\StreamFunctions' => $vendorDir . '/pda/pheanstalk/src/Socket/StreamFunctions.php',
    'Pheanstalk\\Socket\\WriteHistory' => $vendorDir . '/pda/pheanstalk/src/Socket/WriteHistory.php',
    'Pheanstalk\\YamlResponseParser' => $vendorDir . '/pda/pheanstalk/src/YamlResponseParser.php',
    'Phwoolcon\\Aliases' => $vendorDir . '/phwoolcon/phwoolcon/src/Aliases.php',
    'Phwoolcon\\Assets\\ResourceTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/Assets/ResourceTrait.php',
    'Phwoolcon\\Assets\\Resource\\Css' => $vendorDir . '/phwoolcon/phwoolcon/src/Assets/Resource/Css.php',
    'Phwoolcon\\Assets\\Resource\\Js' => $vendorDir . '/phwoolcon/phwoolcon/src/Assets/Resource/Js.php',
    'Phwoolcon\\Cache' => $vendorDir . '/phwoolcon/phwoolcon/src/Cache.php',
    'Phwoolcon\\Cache\\Backend\\Redis' => $vendorDir . '/phwoolcon/phwoolcon/src/Cache/Backend/Redis.php',
    'Phwoolcon\\Cache\\Clearer' => $vendorDir . '/phwoolcon/phwoolcon/src/Cache/Clearer.php',
    'Phwoolcon\\Cli' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli.php',
    'Phwoolcon\\Cli\\Command' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command.php',
    'Phwoolcon\\Cli\\Command\\ClearCacheCommand' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command/ClearCacheCommand.php',
    'Phwoolcon\\Cli\\Command\\Migrate' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command/Migrate.php',
    'Phwoolcon\\Cli\\Command\\MigrateCreate' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command/MigrateCreate.php',
    'Phwoolcon\\Cli\\Command\\MigrateList' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command/MigrateList.php',
    'Phwoolcon\\Cli\\Command\\MigrateRevert' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command/MigrateRevert.php',
    'Phwoolcon\\Cli\\Command\\PhpunitPickPackageCommand' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command/PhpunitPickPackageCommand.php',
    'Phwoolcon\\Cli\\Command\\QueueConsumeCommand' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command/QueueConsumeCommand.php',
    'Phwoolcon\\Cli\\Command\\ServiceCommand' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Command/ServiceCommand.php',
    'Phwoolcon\\Cli\\Output\\Stream' => $vendorDir . '/phwoolcon/phwoolcon/src/Cli/Output/Stream.php',
    'Phwoolcon\\Config' => $vendorDir . '/phwoolcon/phwoolcon/src/Config.php',
    'Phwoolcon\\Controller' => $vendorDir . '/phwoolcon/phwoolcon/src/Controller.php',
    'Phwoolcon\\Controller\\Admin' => $vendorDir . '/phwoolcon/phwoolcon/src/Controller/Admin.php',
    'Phwoolcon\\Controller\\Admin\\ConfigTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/Controller/Admin/ConfigTrait.php',
    'Phwoolcon\\Controller\\Api' => $vendorDir . '/phwoolcon/phwoolcon/src/Controller/Api.php',
    'Phwoolcon\\Cookies' => $vendorDir . '/phwoolcon/phwoolcon/src/Cookies.php',
    'Phwoolcon\\Crypt' => $vendorDir . '/phwoolcon/phwoolcon/src/Crypt.php',
    'Phwoolcon\\Daemon\\Service' => $vendorDir . '/phwoolcon/phwoolcon/src/Daemon/Service.php',
    'Phwoolcon\\Daemon\\ServiceAwareInterface' => $vendorDir . '/phwoolcon/phwoolcon/src/Daemon/ServiceAwareInterface.php',
    'Phwoolcon\\DateTime' => $vendorDir . '/phwoolcon/phwoolcon/src/DateTime.php',
    'Phwoolcon\\Db' => $vendorDir . '/phwoolcon/phwoolcon/src/Db.php',
    'Phwoolcon\\Db\\Adapter\\Pdo\\Mysql' => $vendorDir . '/phwoolcon/phwoolcon/src/Db/Adapter/Pdo/Mysql.php',
    'Phwoolcon\\DeployAutomator\\Controllers\\WebhookTrait' => $vendorDir . '/phwoolcon/deploy-automator/src/Controllers/WebhookTrait.php',
    'Phwoolcon\\DeployAutomator\\Controllers\\Webhooks\\GitHubController' => $vendorDir . '/phwoolcon/deploy-automator/src/Controllers/Webhooks/GitHubController.php',
    'Phwoolcon\\DeployAutomator\\Controllers\\Webhooks\\GitlabController' => $vendorDir . '/phwoolcon/deploy-automator/src/Controllers/Webhooks/GitlabController.php',
    'Phwoolcon\\DeployAutomator\\Deployer' => $vendorDir . '/phwoolcon/deploy-automator/src/Deployer.php',
    'Phwoolcon\\DeployAutomator\\Model\\Project' => $vendorDir . '/phwoolcon/deploy-automator/src/Model/Project.php',
    'Phwoolcon\\DiFix' => $vendorDir . '/phwoolcon/phwoolcon/src/DiFix.php',
    'Phwoolcon\\Events' => $vendorDir . '/phwoolcon/phwoolcon/src/Events.php',
    'Phwoolcon\\Exception\\HttpException' => $vendorDir . '/phwoolcon/phwoolcon/src/Exception/HttpException.php',
    'Phwoolcon\\Exception\\Http\\CsrfException' => $vendorDir . '/phwoolcon/phwoolcon/src/Exception/Http/CsrfException.php',
    'Phwoolcon\\Exception\\Http\\ForbiddenException' => $vendorDir . '/phwoolcon/phwoolcon/src/Exception/Http/ForbiddenException.php',
    'Phwoolcon\\Exception\\Http\\NotFoundException' => $vendorDir . '/phwoolcon/phwoolcon/src/Exception/Http/NotFoundException.php',
    'Phwoolcon\\Exception\\InvalidConfigException' => $vendorDir . '/phwoolcon/phwoolcon/src/Exception/InvalidConfigException.php',
    'Phwoolcon\\Exception\\QueueException' => $vendorDir . '/phwoolcon/phwoolcon/src/Exception/QueueException.php',
    'Phwoolcon\\Exception\\SessionException' => $vendorDir . '/phwoolcon/phwoolcon/src/Exception/SessionException.php',
    'Phwoolcon\\Exception\\WidgetException' => $vendorDir . '/phwoolcon/phwoolcon/src/Exception/WidgetException.php',
    'Phwoolcon\\Fsm\\Exception' => $vendorDir . '/phwoolcon/fsm/src/Exception.php',
    'Phwoolcon\\Fsm\\StateMachine' => $vendorDir . '/phwoolcon/fsm/src/StateMachine.php',
    'Phwoolcon\\Http\\Cookie' => $vendorDir . '/phwoolcon/phwoolcon/src/Http/Cookie.php',
    'Phwoolcon\\I18n' => $vendorDir . '/phwoolcon/phwoolcon/src/I18n.php',
    'Phwoolcon\\Log' => $vendorDir . '/phwoolcon/phwoolcon/src/Log.php',
    'Phwoolcon\\Mailer' => $vendorDir . '/phwoolcon/phwoolcon/src/Mailer.php',
    'Phwoolcon\\Model' => $vendorDir . '/phwoolcon/phwoolcon/src/Model.php',
    'Phwoolcon\\Model\\Config' => $vendorDir . '/phwoolcon/phwoolcon/src/Model/Config.php',
    'Phwoolcon\\Model\\DynamicTrait\\EmptyTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/Model/DynamicTrait/EmptyTrait.php',
    'Phwoolcon\\Model\\DynamicTrait\\Loader' => $vendorDir . '/phwoolcon/phwoolcon/src/Model/DynamicTrait/Loader.php',
    'Phwoolcon\\Model\\MetaData\\InCache' => $vendorDir . '/phwoolcon/phwoolcon/src/Model/MetaData/InCache.php',
    'Phwoolcon\\Model\\User' => $vendorDir . '/phwoolcon/phwoolcon/src/Model/User.php',
    'Phwoolcon\\Model\\UserProfile' => $vendorDir . '/phwoolcon/phwoolcon/src/Model/UserProfile.php',
    'Phwoolcon\\Payload' => $vendorDir . '/phwoolcon/phwoolcon/src/Payload.php',
    'Phwoolcon\\PayloadTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/PayloadTrait.php',
    'Phwoolcon\\Protocol\\StreamWrapperInterface' => $vendorDir . '/phwoolcon/phwoolcon/src/Protocol/StreamWrapperInterface.php',
    'Phwoolcon\\Protocol\\StreamWrapperTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/Protocol/StreamWrapperTrait.php',
    'Phwoolcon\\Queue' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue.php',
    'Phwoolcon\\Queue\\AdapterInterface' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/AdapterInterface.php',
    'Phwoolcon\\Queue\\AdapterTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/AdapterTrait.php',
    'Phwoolcon\\Queue\\Adapter\\Beanstalkd' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Adapter/Beanstalkd.php',
    'Phwoolcon\\Queue\\Adapter\\Beanstalkd\\Job' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Adapter/Beanstalkd/Job.php',
    'Phwoolcon\\Queue\\Adapter\\DbQueue' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Adapter/DbQueue.php',
    'Phwoolcon\\Queue\\Adapter\\DbQueue\\Connection' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Adapter/DbQueue/Connection.php',
    'Phwoolcon\\Queue\\Adapter\\DbQueue\\Job' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Adapter/DbQueue/Job.php',
    'Phwoolcon\\Queue\\Adapter\\JobInterface' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Adapter/JobInterface.php',
    'Phwoolcon\\Queue\\Adapter\\JobTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Adapter/JobTrait.php',
    'Phwoolcon\\Queue\\FailedLoggerDb' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/FailedLoggerDb.php',
    'Phwoolcon\\Queue\\Listener' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Listener.php',
    'Phwoolcon\\Queue\\Listener\\Result' => $vendorDir . '/phwoolcon/phwoolcon/src/Queue/Listener/Result.php',
    'Phwoolcon\\Router' => $vendorDir . '/phwoolcon/phwoolcon/src/Router.php',
    'Phwoolcon\\Router\\FilterInterface' => $vendorDir . '/phwoolcon/phwoolcon/src/Router/FilterInterface.php',
    'Phwoolcon\\Router\\FilterTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/Router/FilterTrait.php',
    'Phwoolcon\\Router\\Filter\\DisableCsrfFilter' => $vendorDir . '/phwoolcon/phwoolcon/src/Router/Filter/DisableCsrfFilter.php',
    'Phwoolcon\\Router\\Filter\\DisableSessionFilter' => $vendorDir . '/phwoolcon/phwoolcon/src/Router/Filter/DisableSessionFilter.php',
    'Phwoolcon\\Router\\Filter\\MultiFilter' => $vendorDir . '/phwoolcon/phwoolcon/src/Router/Filter/MultiFilter.php',
    'Phwoolcon\\Security' => $vendorDir . '/phwoolcon/phwoolcon/src/Security.php',
    'Phwoolcon\\Session' => $vendorDir . '/phwoolcon/phwoolcon/src/Session.php',
    'Phwoolcon\\Session\\AdapterInterface' => $vendorDir . '/phwoolcon/phwoolcon/src/Session/AdapterInterface.php',
    'Phwoolcon\\Session\\AdapterTrait' => $vendorDir . '/phwoolcon/phwoolcon/src/Session/AdapterTrait.php',
    'Phwoolcon\\Session\\Adapter\\Memcached' => $vendorDir . '/phwoolcon/phwoolcon/src/Session/Adapter/Memcached.php',
    'Phwoolcon\\Session\\Adapter\\Native' => $vendorDir . '/phwoolcon/phwoolcon/src/Session/Adapter/Native.php',
    'Phwoolcon\\Session\\Adapter\\Redis' => $vendorDir . '/phwoolcon/phwoolcon/src/Session/Adapter/Redis.php',
    'Phwoolcon\\Text' => $vendorDir . '/phwoolcon/phwoolcon/src/Text.php',
    'Phwoolcon\\Util\\Counter' => $vendorDir . '/phwoolcon/phwoolcon/src/Util/Counter.php',
    'Phwoolcon\\Util\\Counter\\Adapter' => $vendorDir . '/phwoolcon/phwoolcon/src/Util/Counter/Adapter.php',
    'Phwoolcon\\Util\\Counter\\AdapterInterface' => $vendorDir . '/phwoolcon/phwoolcon/src/Util/Counter/AdapterInterface.php',
    'Phwoolcon\\Util\\Counter\\Adapter\\Auto' => $vendorDir . '/phwoolcon/phwoolcon/src/Util/Counter/Adapter/Auto.php',
    'Phwoolcon\\Util\\Counter\\Adapter\\Cache' => $vendorDir . '/phwoolcon/phwoolcon/src/Util/Counter/Adapter/Cache.php',
    'Phwoolcon\\Util\\Counter\\Adapter\\Rds' => $vendorDir . '/phwoolcon/phwoolcon/src/Util/Counter/Adapter/Rds.php',
    'Phwoolcon\\Util\\Reflection\\Stringify\\Parameter' => $vendorDir . '/phwoolcon/phwoolcon/src/Util/Reflection/Stringify/Parameter.php',
    'Phwoolcon\\Util\\Timer' => $vendorDir . '/phwoolcon/phwoolcon/src/Util/Timer.php',
    'Phwoolcon\\View' => $vendorDir . '/phwoolcon/phwoolcon/src/View.php',
    'Phwoolcon\\View\\Engine\\Php' => $vendorDir . '/phwoolcon/phwoolcon/src/View/Engine/Php.php',
    'Phwoolcon\\View\\Widget' => $vendorDir . '/phwoolcon/phwoolcon/src/View/Widget.php',
    'SensioLabs\\AnsiConverter\\AnsiToHtmlConverter' => $vendorDir . '/sensiolabs/ansi-to-html/SensioLabs/AnsiConverter/AnsiToHtmlConverter.php',
    'SensioLabs\\AnsiConverter\\Bridge\\Twig\\AnsiExtension' => $vendorDir . '/sensiolabs/ansi-to-html/SensioLabs/AnsiConverter/Bridge/Twig/AnsiExtension.php',
    'SensioLabs\\AnsiConverter\\Tests\\AnsiToHtmlConverterTest' => $vendorDir . '/sensiolabs/ansi-to-html/SensioLabs/AnsiConverter/Tests/AnsiToHtmlConverterTest.php',
    'SensioLabs\\AnsiConverter\\Theme\\SolarizedTheme' => $vendorDir . '/sensiolabs/ansi-to-html/SensioLabs/AnsiConverter/Theme/SolarizedTheme.php',
    'SensioLabs\\AnsiConverter\\Theme\\SolarizedXTermTheme' => $vendorDir . '/sensiolabs/ansi-to-html/SensioLabs/AnsiConverter/Theme/SolarizedXTermTheme.php',
    'SensioLabs\\AnsiConverter\\Theme\\Theme' => $vendorDir . '/sensiolabs/ansi-to-html/SensioLabs/AnsiConverter/Theme/Theme.php',
    'Symfony\\Component\\Console\\Application' => $vendorDir . '/symfony/console/Application.php',
    'Symfony\\Component\\Console\\Command\\Command' => $vendorDir . '/symfony/console/Command/Command.php',
    'Symfony\\Component\\Console\\Command\\HelpCommand' => $vendorDir . '/symfony/console/Command/HelpCommand.php',
    'Symfony\\Component\\Console\\Command\\ListCommand' => $vendorDir . '/symfony/console/Command/ListCommand.php',
    'Symfony\\Component\\Console\\ConsoleEvents' => $vendorDir . '/symfony/console/ConsoleEvents.php',
    'Symfony\\Component\\Console\\Descriptor\\ApplicationDescription' => $vendorDir . '/symfony/console/Descriptor/ApplicationDescription.php',
    'Symfony\\Component\\Console\\Descriptor\\Descriptor' => $vendorDir . '/symfony/console/Descriptor/Descriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\DescriptorInterface' => $vendorDir . '/symfony/console/Descriptor/DescriptorInterface.php',
    'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor' => $vendorDir . '/symfony/console/Descriptor/JsonDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\MarkdownDescriptor' => $vendorDir . '/symfony/console/Descriptor/MarkdownDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\TextDescriptor' => $vendorDir . '/symfony/console/Descriptor/TextDescriptor.php',
    'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor' => $vendorDir . '/symfony/console/Descriptor/XmlDescriptor.php',
    'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => $vendorDir . '/symfony/console/Event/ConsoleCommandEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleEvent' => $vendorDir . '/symfony/console/Event/ConsoleEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleExceptionEvent' => $vendorDir . '/symfony/console/Event/ConsoleExceptionEvent.php',
    'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => $vendorDir . '/symfony/console/Event/ConsoleTerminateEvent.php',
    'Symfony\\Component\\Console\\Exception\\CommandNotFoundException' => $vendorDir . '/symfony/console/Exception/CommandNotFoundException.php',
    'Symfony\\Component\\Console\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/console/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Console\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/console/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Console\\Exception\\InvalidOptionException' => $vendorDir . '/symfony/console/Exception/InvalidOptionException.php',
    'Symfony\\Component\\Console\\Exception\\LogicException' => $vendorDir . '/symfony/console/Exception/LogicException.php',
    'Symfony\\Component\\Console\\Exception\\RuntimeException' => $vendorDir . '/symfony/console/Exception/RuntimeException.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatter' => $vendorDir . '/symfony/console/Formatter/OutputFormatter.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface' => $vendorDir . '/symfony/console/Formatter/OutputFormatterInterface.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyle' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyle.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleInterface' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyleInterface.php',
    'Symfony\\Component\\Console\\Formatter\\OutputFormatterStyleStack' => $vendorDir . '/symfony/console/Formatter/OutputFormatterStyleStack.php',
    'Symfony\\Component\\Console\\Helper\\DebugFormatterHelper' => $vendorDir . '/symfony/console/Helper/DebugFormatterHelper.php',
    'Symfony\\Component\\Console\\Helper\\DescriptorHelper' => $vendorDir . '/symfony/console/Helper/DescriptorHelper.php',
    'Symfony\\Component\\Console\\Helper\\FormatterHelper' => $vendorDir . '/symfony/console/Helper/FormatterHelper.php',
    'Symfony\\Component\\Console\\Helper\\Helper' => $vendorDir . '/symfony/console/Helper/Helper.php',
    'Symfony\\Component\\Console\\Helper\\HelperInterface' => $vendorDir . '/symfony/console/Helper/HelperInterface.php',
    'Symfony\\Component\\Console\\Helper\\HelperSet' => $vendorDir . '/symfony/console/Helper/HelperSet.php',
    'Symfony\\Component\\Console\\Helper\\InputAwareHelper' => $vendorDir . '/symfony/console/Helper/InputAwareHelper.php',
    'Symfony\\Component\\Console\\Helper\\ProcessHelper' => $vendorDir . '/symfony/console/Helper/ProcessHelper.php',
    'Symfony\\Component\\Console\\Helper\\ProgressBar' => $vendorDir . '/symfony/console/Helper/ProgressBar.php',
    'Symfony\\Component\\Console\\Helper\\ProgressIndicator' => $vendorDir . '/symfony/console/Helper/ProgressIndicator.php',
    'Symfony\\Component\\Console\\Helper\\QuestionHelper' => $vendorDir . '/symfony/console/Helper/QuestionHelper.php',
    'Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper' => $vendorDir . '/symfony/console/Helper/SymfonyQuestionHelper.php',
    'Symfony\\Component\\Console\\Helper\\Table' => $vendorDir . '/symfony/console/Helper/Table.php',
    'Symfony\\Component\\Console\\Helper\\TableCell' => $vendorDir . '/symfony/console/Helper/TableCell.php',
    'Symfony\\Component\\Console\\Helper\\TableSeparator' => $vendorDir . '/symfony/console/Helper/TableSeparator.php',
    'Symfony\\Component\\Console\\Helper\\TableStyle' => $vendorDir . '/symfony/console/Helper/TableStyle.php',
    'Symfony\\Component\\Console\\Input\\ArgvInput' => $vendorDir . '/symfony/console/Input/ArgvInput.php',
    'Symfony\\Component\\Console\\Input\\ArrayInput' => $vendorDir . '/symfony/console/Input/ArrayInput.php',
    'Symfony\\Component\\Console\\Input\\Input' => $vendorDir . '/symfony/console/Input/Input.php',
    'Symfony\\Component\\Console\\Input\\InputArgument' => $vendorDir . '/symfony/console/Input/InputArgument.php',
    'Symfony\\Component\\Console\\Input\\InputAwareInterface' => $vendorDir . '/symfony/console/Input/InputAwareInterface.php',
    'Symfony\\Component\\Console\\Input\\InputDefinition' => $vendorDir . '/symfony/console/Input/InputDefinition.php',
    'Symfony\\Component\\Console\\Input\\InputInterface' => $vendorDir . '/symfony/console/Input/InputInterface.php',
    'Symfony\\Component\\Console\\Input\\InputOption' => $vendorDir . '/symfony/console/Input/InputOption.php',
    'Symfony\\Component\\Console\\Input\\StringInput' => $vendorDir . '/symfony/console/Input/StringInput.php',
    'Symfony\\Component\\Console\\Logger\\ConsoleLogger' => $vendorDir . '/symfony/console/Logger/ConsoleLogger.php',
    'Symfony\\Component\\Console\\Output\\BufferedOutput' => $vendorDir . '/symfony/console/Output/BufferedOutput.php',
    'Symfony\\Component\\Console\\Output\\ConsoleOutput' => $vendorDir . '/symfony/console/Output/ConsoleOutput.php',
    'Symfony\\Component\\Console\\Output\\ConsoleOutputInterface' => $vendorDir . '/symfony/console/Output/ConsoleOutputInterface.php',
    'Symfony\\Component\\Console\\Output\\NullOutput' => $vendorDir . '/symfony/console/Output/NullOutput.php',
    'Symfony\\Component\\Console\\Output\\Output' => $vendorDir . '/symfony/console/Output/Output.php',
    'Symfony\\Component\\Console\\Output\\OutputInterface' => $vendorDir . '/symfony/console/Output/OutputInterface.php',
    'Symfony\\Component\\Console\\Output\\StreamOutput' => $vendorDir . '/symfony/console/Output/StreamOutput.php',
    'Symfony\\Component\\Console\\Question\\ChoiceQuestion' => $vendorDir . '/symfony/console/Question/ChoiceQuestion.php',
    'Symfony\\Component\\Console\\Question\\ConfirmationQuestion' => $vendorDir . '/symfony/console/Question/ConfirmationQuestion.php',
    'Symfony\\Component\\Console\\Question\\Question' => $vendorDir . '/symfony/console/Question/Question.php',
    'Symfony\\Component\\Console\\Style\\OutputStyle' => $vendorDir . '/symfony/console/Style/OutputStyle.php',
    'Symfony\\Component\\Console\\Style\\StyleInterface' => $vendorDir . '/symfony/console/Style/StyleInterface.php',
    'Symfony\\Component\\Console\\Style\\SymfonyStyle' => $vendorDir . '/symfony/console/Style/SymfonyStyle.php',
    'Symfony\\Component\\Console\\Tester\\ApplicationTester' => $vendorDir . '/symfony/console/Tester/ApplicationTester.php',
    'Symfony\\Component\\Console\\Tester\\CommandTester' => $vendorDir . '/symfony/console/Tester/CommandTester.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'Wikimedia\\Composer\\Logger' => $vendorDir . '/wikimedia/composer-merge-plugin/src/Logger.php',
    'Wikimedia\\Composer\\MergePlugin' => $vendorDir . '/wikimedia/composer-merge-plugin/src/MergePlugin.php',
    'Wikimedia\\Composer\\Merge\\ExtraPackage' => $vendorDir . '/wikimedia/composer-merge-plugin/src/Merge/ExtraPackage.php',
    'Wikimedia\\Composer\\Merge\\MissingFileException' => $vendorDir . '/wikimedia/composer-merge-plugin/src/Merge/MissingFileException.php',
    'Wikimedia\\Composer\\Merge\\NestedArray' => $vendorDir . '/wikimedia/composer-merge-plugin/src/Merge/NestedArray.php',
    'Wikimedia\\Composer\\Merge\\PluginState' => $vendorDir . '/wikimedia/composer-merge-plugin/src/Merge/PluginState.php',
    'Wikimedia\\Composer\\Merge\\StabilityFlags' => $vendorDir . '/wikimedia/composer-merge-plugin/src/Merge/StabilityFlags.php',
    'XHProfRuns_Default' => $baseDir . '/app/library/Xhprof/xhprof_lib/utils/xhprof_runs.php',
    'iXHProfRuns' => $baseDir . '/app/library/Xhprof/xhprof_lib/utils/xhprof_runs.php',
);