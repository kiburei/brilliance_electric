product_name = "DOWN_";
id = 0;

filenames = Dir.glob("*.jpg")

filenames.each do |filename|
    File.rename(filename, product_name + id.to_s)
    id += 1
end
