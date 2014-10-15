description 'Bootstrap for Sass'

# Stylesheet importing bootstrap
sass 'styles.scss'

manifest = Pathname.new(File.dirname(__FILE__))
assets   = File.expand_path('../assets', manifest)

# Provide variables files
bs_sass = "#{assets}/sass/bootstrap"
sass '_bootstrap-variables.sass.erb',
           :erb               => true,
           :to                => '_bootstrap-variables.sass',
           :bs_variables_path => File.expand_path("#{bs_sass}/_variables.scss", manifest)

# Copy JS and fonts
{:javascript => 'js',
 :font       => 'fonts'
}.each do |method, dir|
  root = Pathname.new(assets).join(dir)
  Dir.glob root.join('**', '*.*') do |path|
    path = Pathname.new(path)
    send method, path.relative_path_from(manifest).to_s,
         :to => path.relative_path_from(root).to_s
  end
end
