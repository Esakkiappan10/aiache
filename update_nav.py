import os
import glob
import re

dir_path = r'd:\aiachenew'
files = glob.glob(os.path.join(dir_path, '*.php')) + glob.glob(os.path.join(dir_path, '*.html'))

desktop_remove_regex = re.compile(
    r'\n\s*<a href="editorial_board\.php"\s*class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Editorial\s*Board</a>',
    re.IGNORECASE
)

mobile_remove_regex = re.compile(
    r'\n\s*<a href="editorial_board\.php"\s*class="block px-4 py-1.5 text-sm text-gray-[0-9]+ hover:text-brand-blue">Editorial\s*Board</a>',
    re.IGNORECASE
)

desktop_insert_regex = re.compile(
    r'(<a href="members\.php"\s*class="hover:text-brand-blue transition">Members</a>)',
    re.IGNORECASE
)

mobile_insert_regex = re.compile(
    r'(<a href="members\.php"\s*class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Members</a>)',
    re.IGNORECASE
)

desktop_repl = r'<a href="editorial_board.php" class="hover:text-brand-blue transition">Editorial Board</a>\n                \1'
mobile_repl = r'<a href="editorial_board.php"\n                    class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Editorial Board</a>\n                \1'

modified_count = 0

for file_path in files:
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    original_content = content

    # Check if there is anything to do
    if 'editorial_board.php' in content:
        # Check if already extracted (i.e. if it's outside the dropdowns)
        # We can detect this if desktop_remove_regex or mobile_remove_regex matches
        desk_match = desktop_remove_regex.search(content)
        mob_match = mobile_remove_regex.search(content)

        if desk_match or mob_match:
            # Remove
            content = desktop_remove_regex.sub('', content)
            content = mobile_remove_regex.sub('', content)

            # Insert
            # Make sure we don't insert it multiple times if it's already there (though we just removed it from where it shouldn't be)
            if 'class="hover:text-brand-blue transition">Editorial Board</a>' not in content:
                content = desktop_insert_regex.sub(desktop_repl, content)
            if 'class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Editorial Board</a>' not in content:
                content = mobile_insert_regex.sub(mobile_repl, content)

            if content != original_content:
                with open(file_path, 'w', encoding='utf-8') as f:
                    f.write(content)
                modified_count += 1
                print(f"Modified: {os.path.basename(file_path)}")
            else:
                print(f"No changes made to {os.path.basename(file_path)} despite match.")

print(f"Total files modified: {modified_count}")
