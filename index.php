<?php
/**
 * 入口文件
 **/

// if (extension_loaded('xhprof')) {
//     $XHPROF_ROOT = 'D:\ServerX\htdocs';
//     require $XHPROF_ROOT.'/xhprof_lib/utils/xhprof_lib.php';
//     require $XHPROF_ROOT.'/xhprof_lib/utils/xhprof_runs.php';
//     xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
// }

define('APP',  './');

require '../Xframe/Xframe.php';


// if (extension_loaded('xhprof')) {
//     $profiler_namespace = 'xframe';  // namespace for your application
//     $xhprof_data = xhprof_disable();
//     $xhprof_runs = new XHProfRuns_Default();
//     $run_id = $xhprof_runs->save_run($xhprof_data, $profiler_namespace);
//     echo '<a href="'.sprintf('http://xhprof/index.php?run=%s&source=%s', $run_id, $profiler_namespace).'" target="_blank">Profiler output</a>';
// }
