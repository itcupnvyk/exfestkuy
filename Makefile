SHELL:=/bin/bash

migrate: 
	@php index.php migration migrate
migration:
ifdef name
	@php index.php migration create $(name)
else
	@echo "[ERROR] : Required name"
	@echo "[USAGE] : make migration name=your_migration"
endif