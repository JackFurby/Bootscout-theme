# save the version number to a variable
vn=$(grep "^Version" style.css | grep -oe '\([0-9.]*\)')

# delete existing release zip files
rm Bootscout-theme*.zip

# compile css
gulp css

# make temp dir to mimic folder structure in zip archaive
mkdir ./Bootscout-theme
rsync -r --exclude='Bootscout-theme' --exclude='node_modules' ./* Bootscout-theme

# make zip file
zip -vr Bootscout-theme-${vn}.zip ./Bootscout-theme -x "./Bootscout-theme/.git/*"

# delete folders and files we do not want in the zip file
zip --delete Bootscout-theme-${vn}.zip "Bootscout-theme/package-lock.json"
zip --delete Bootscout-theme-${vn}.zip "Bootscout-theme/package.json"
zip --delete Bootscout-theme-${vn}.zip "Bootscout-theme/Bootscout-theme*.zip"
zip --delete Bootscout-theme-${vn}.zip "Bootscout-theme/.gitignore"
zip --delete Bootscout-theme-${vn}.zip "Bootscout-theme/gulpfile.js"
zip --delete Bootscout-theme-${vn}.zip "Bootscout-theme/create_zip.sh"
zip --delete Bootscout-theme-${vn}.zip "Bootscout-theme/bootstrap/scss/*"
zip --delete Bootscout-theme-${vn}.zip "Bootscout-theme/theme/scss/*"

# delete temp dir
rm -rf Bootscout-theme
