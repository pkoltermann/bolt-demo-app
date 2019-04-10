build:
	cd bolt-app && docker build -t pkoltermann/bolt-app-k8s .

create-configs:
	kubectl create configmap bolt-config --from-file=k8s/app/config.yml
	kubectl create configmap nginx-config --from-file=k8s/nginx/

