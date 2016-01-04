product_name = "SAM_";
id = 44;

filenames = Dir.glob("*.JPG")

filenames.each do |filename|
    File.rename(filename, product_name + id.to_s)
    id += 1
end
