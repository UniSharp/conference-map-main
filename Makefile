all: todo gen-app-cache

gen-app-cache-ts:
	./scripts/gen-app-cache.sh ts > unisharp-map.appcache
	git diff unisharp-map.appcache


gen-app-cache:
	./scripts/gen-app-cache.sh > unisharp-map.appcache
	git diff unisharp-map.appcache

fetch:
	./scripts/fetch-coscup-program.sh
	git diff assets/js/program.json.js

todo:
	./scripts/todo.sh

install:
	npm install

grunt: install
	grunt

.PHONY: all gen-app-cache-ts gen-app-cache fetch todo grunt
