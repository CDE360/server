#!/bin/sh

DATE=$(date +%Y%m%d%H%M%S)
FILENAME="../server-cde-branding-$DATE.tar"
FILENAME_APPS="../server-cde-branding-apps-$DATE.tar"

echo "Packaging $FILENAME"
tar -cf $FILENAME --exclude=".git*" --exclude="config" --exclude="tests" --exclude="apps/*" --exclude="3rdparty/*" --exclude="build/*" --exclude="data" *
pbzip2 $FILENAME &

echo "Packaging $FILENAME_APPS"
tar -cf $FILENAME_APPS --exclude="apps/files_ifcviewer" --exclude="apps/files_ifcviewer_annotation" --exclude="apps/workflow_ifc_converter" --exclude="apps/workflow_pdf_converter" apps/*
pbzip2 $FILENAME_APPS
