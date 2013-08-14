guard 'livereload' do
  watch(%r{app/views/.+\.html})
  watch(%r{public/.+\.(css|js|html)})
  watch(%r{.+\.php})
end

guard 'sass', :input => 'app/assets/sass', :output => 'public/css'

guard 'shell' do
  watch(/app\/helpers\/(.*).php/) {|m| `composer dumpautoload` }
  watch(/app\/models\/(.*).php/) {|m| `composer dumpautoload` }
end
