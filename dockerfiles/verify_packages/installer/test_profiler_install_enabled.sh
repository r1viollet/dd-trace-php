#!/usr/bin/env sh

set -e

. "$(dirname ${0})/utils.sh"

# Initially no ddtrace
assert_no_ddtrace

# Install using the php installer
new_version="0.74.0"
generate_installers "${new_version}"
php ./build/packages/datadog-setup.php --php-bin php --enable-profiling
assert_ddtrace_version "${new_version}"

assert_file_exists "$(get_php_extension_dir)"/datadog-profiling.so

assert_profiler_version 0.6.1
